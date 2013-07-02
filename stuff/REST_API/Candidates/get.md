candidates/get
===

Returns information about candidate identified by `id`

Example:

Restful call from Raw PHP:
```
$data = $WU_API->sendMessageToWU( 'candidates/get', array( 'id' => '123' ) );
var_export( $data );
```

Restful call from JS API:
```
var data = wu.sendMessageToWU( 'candidates/get'. {id: 123} );
console.log( data ); //output to firebug console
```

Restful call from Interaction API
```
$data = \WU_API::apiCall( 'candidates/get', array( 'id' => '123' ) );
\WU_API::debug( $data ); //output to firebug console
```