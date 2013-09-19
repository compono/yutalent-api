credits/getProductID
===

Returns current product ID which you can use to show user a link to buy more items of product, for example.

Example:

```
// interaction api
$productID = \WU_API::apiCall('credits/getProductID');
\WU_API::showAlert( 'Product ID is ' . $value . ' !' );
```

```
// js api

wu.sendMessageToWU('credits/getProductID', {}, function(response){
  alert('Product ID is ' + response);
});
```
