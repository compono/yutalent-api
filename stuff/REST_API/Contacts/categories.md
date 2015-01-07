contacts/categories
===

Returns category list for the current client.

Example:

Restful call from Raw PHP:
```php
$categories = $WU_API->sendMessageToWU( 'contacts/categories' );
var_export( $categories );
```

Restful call from JS API:
```php
var categories = wu.sendMessageToWU( 'contacts/categories' );
console.log( categories ); //output to firebug console
```

Restful call from Interaction API
```php
$categories = \WU_API::apiCall( 'contacts/categories' );
\WU_API::debug( $categories ); //output to firebug console
```
