projects/list
===

It doesn't have params, just list projects of a user

Example:

Restful call from Raw PHP:
```
$data = $WU_API->sendMessageToWU( 'projects/list' );
var_export( $data );
```

Restful call from JS API:
```
var data = wu.sendMessageToWU( 'projects/list' );
console.log( data ); //output to firebug console
```

Restful call from Interaction API
```
$data = \WU_API::apiCall( 'projects/list' );
\WU_API::debug( $data ); //output to firebug console
```
