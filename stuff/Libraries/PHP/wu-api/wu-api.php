<?php

require_once __DIR__ . '/../oauth/http.php';
require_once __DIR__ . '/../oauth/oauth_client.php';

class WU_API
{
    protected $_frame;
    protected $_url;
    protected $_token;
    protected $_request;
    protected $_params;

    protected $_domain;

    protected $_oauth;

    public function __construct()
    {
        if( !session_id() )
        {
            session_start();
        }

        $data = $this->parseSignedRequest();

        if( count($data) )
        {
            $this->_frame = $data['frame'];
            $this->_url = $data['url'];
            $this->_token = $data['token'];
            $this->_request = $data['request'];
            $this->_params = $_POST + $data['params'];

            $this->_domain = $data['protocol'] . '://' . $data['domain'];
        }

        if( defined('WU_DOMAIN') && !$this->_domain )
        {
            $this->_domain = WU_DOMAIN;
        }

        $this->_oauth = new oauth_client_class();

        $this->_oauth->offline = true;

        $this->setRequestTokenUrl();
        $this->setDialogUrl();

        $this->_oauth->access_token_url = $this->_domain . '/c/oauth/access_token';

        $this->_oauth->debug = true;
        $this->_oauth->debug_http = true;
        $this->_oauth->server = '';

        $this->_oauth->redirect_uri = $this->_domain . $_SERVER['REQUEST_URI'];
        if( isset($_POST['signed_request']) )
        {
            $this->_oauth->redirect_uri .= (strpos($this->_oauth->redirect_uri, '?') === false?'?':'&') . 'signed_request=';
            $this->_oauth->redirect_uri .= $_POST['signed_request'];
        }

        $this->_oauth->client_id = WU_ID;
        $this->_oauth->client_secret = WU_SECRET;

        $this->_oauth->scope = '';

        $this->_oauth->session_started = true;

        $this->_oauth->Initialize();
    }

    public function setRequestTokenUrl( $account_id = null )
    {
        $this->_oauth->request_token_url = $this->_domain . '/c/oauth/authorize?';

        if( $account_id )
        {
            $this->_oauth->request_token_url .= 'user_id=' . intval($account_id) . '&';
        }

        $this->_oauth->request_token_url .= 'client_id={CLIENT_ID}&redirect_uri={REDIRECT_URI}&scope={SCOPE}&state={STATE}';
    }

    public function setDialogUrl( $account_id = null )
    {
        $this->_oauth->dialog_url = $this->_domain . '/c/oauth/authorize?';

        if( $account_id )
        {
            $this->_oauth->dialog_url .= 'user_id=' . intval($account_id) . '&';
        }

        $this->_oauth->dialog_url .= 'client_id={CLIENT_ID}&redirect_uri={REDIRECT_URI}&scope={SCOPE}&state={STATE}';
    }

    public function setAccountId( $account_id )
    {
        $this->setRequestTokenUrl( $account_id );
        $this->setDialogUrl( $account_id );
    }

    public function setRedirectUri( $uri )
    {
        $this->_oauth->redirect_uri = $uri;
    }

    public function setToken( $token )
    {
        $this->_token = $token;
    }

    public function setClientId( $id )
    {
        $this->_oauth->client_id = $id;
    }

    public function setClientSecret( $secret )
    {
        $this->_oauth->client_secret = $secret;
    }

    public static function parseSignedRequest()
    {
        if( isset($_REQUEST['signed_request']) )
        {
            //decode it

            list($crc32, $payloadEncoded) = explode('.', $_REQUEST['signed_request']);

            $computedCrc32 = hash('crc32', $payloadEncoded);

            if( $crc32 !== $computedCrc32 )
            {
                throw new Exception('Invalid checksum');
            }

            $payload = json_decode( base64_decode( $payloadEncoded ), true);

            return $payload;
        }

        return array();
    }

    public function sendMessageToWU($method, $params = array())
    {
        $params['method'] = $method;

        if( $this->getToken() )
        {
            $this->_oauth->StoreAccessToken( array( 'value' => $this->getToken() ) );
        }

        $success = $this->_oauth->Process();
        $success = $this->_oauth->Finalize($success);

        if( $success )
        {
            $success = $this->_oauth->CallAPI(
                $this->_domain . '/c/oauth/v1?' . http_build_query($params),
                'GET', array(), array('FailOnAccessError'=>true), $response);

            if( !$success )
            {
                $this->_oauth->Output();
                die('Error calling the API');
            }
            else
            {
                return $response;
            }
        }
        else
        {
            $this->_oauth->Output();
            die('Authentication error');
        }
    }

    public function getAllParams()
    {
        return $this->_params;
    }

    public function getParam( $key )
    {
        return $this->_params[ $key ];
    }

    public function getFrameId()
    {
        return $this->_frame;
    }

    public function getToken()
    {
        return $this->_token;
    }

    public function getUrl()
    {
        return $this->_url;
    }
}