PHP API
===

PHP API is built on top of [OAuth2 protocol](http://oauth.net/2)

To connect library use:

```
require __DIR__ . '/api/wu-api/wu-api.php';
```

In order to use the library you have to define 3 constants:
 * `WU_DOMAIN` - domain of the server which will be used for API calls (for example `https://www.yutalent.co.uk` or  `https://www.yutalent.com`)
 * `WU_ID` - application id (you can find it in developer area)
 * `WU_SECRET` - application secret (you can find it in developer area)

Example of using library:

```
<?php
require __DIR__ . '/../api/wu-api/wu-api.php';

define('WU_DOMAIN', 'https://www.yutalent.co.uk');

define('WU_ID', 'xxx-xxx-xxx');
define('WU_SECRET', 'xxx-xxx-xxx');

$WU_API = new WU_API();

// this is optional, but if you use query parameters in your script,
// then better to set it right, as oauth server will return additional parameters into script
// and then redirect uri will differ from the url which requested access token
$WU_API->setRedirectUri( 'http://domain.com/path/to/script.php' );

$response = $WU_API->sendMessageToWU( 'user/profile', array() /* no params */ );

var_export($response);
```
