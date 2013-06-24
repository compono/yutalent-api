\WU_API::apiCall( $method, $params )
===

A call to the REST API. For the complete list of `$method`s and `$params` please read the [REST API](https://github.com/oneworldmarket/wutalent-api/tree/master/REST_API) documentation.

Example:

```
<?php

$result = \WU_API::apiCall( 'storage/get', array( 'key' => 'last_candidate' ) );

//lets check what we've got
\WU_API::debug( $result );
```
