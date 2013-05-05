\WU_API::apiCall( $method, $params )
===

That's a call to REST API. For the complete list of `$method`s and `$params` please read the REST API documentation.

Example:

```
<?php

$result = \WU_API::apiCall( 'storage/get', array( 'key' => 'last_candidate' ) );

//lets check what we've got
\WU_API::debug( $result );
```