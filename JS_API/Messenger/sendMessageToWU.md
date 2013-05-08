sendMessageToWU( method, params, callBack )
==
This sends a request to the REST API using given method, params and response is returned back into callback function.

`method` - method from REST API
`params` - params specific for the method
`callBack` - function which will handle the response from method or null.

Example:

```
<script>
wu.Messenger.sendMessageToWU('user/profile', {}, function(response){
                alert( response.user );
            });
</script>
```