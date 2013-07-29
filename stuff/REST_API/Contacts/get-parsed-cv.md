contacts/get-parsed-cv
===

Returns cv parsed data of contact record identified by `id`

Example:

Restful call from Raw PHP:
```
$data = $WU_API->sendMessageToWU( 'contacts/get-parsed-cv', array( 'id' => '123' ) );
var_export( $data );
```

Restful call from JS API:
```
var data = wu.sendMessageToWU( 'contacts/get-parsed-cv'. {id: 123} );
console.log( data ); //output to firebug console
```

Restful call from Interaction API
```
$data = \WU_API::apiCall( 'contacts/get-parsed-cv', array( 'id' => '123' ) );
\WU_API::debug( $data ); //output to firebug console
```
