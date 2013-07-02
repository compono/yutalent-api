candidates/categories
===

Returns category list for the current client.

Example:

Restful call from Raw PHP:
```
$categories = $WU_API->sendMessageToWU( 'candidates/categories' );
var_export( $categories );
```

Restful call from JS API:
```
var categories = wu.sendMessageToWU( 'candidates/categories' );
console.log( categories ); //output to firebug console
```

Restful call from Interaction API
```
$categories = \WU_API::apiCall( 'candidates/categories' );
\WU_API::debug( $categories ); //output to firebug console
```