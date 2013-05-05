\WU_API::urlParams()
===

Return parsed url params from the URL of the request.  
Please note that it always returns params of the current wutalent page and doesn't track callbacks from WU APIs.

Example:

```
$params = \WU_API::urlParams();

$candidate_id = $params['id'];

\WU_API::debug( $params );
\WU_API::debug( $candidate_id );
```