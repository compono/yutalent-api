sendMessageToWU( method, params, callBack )
==
This sends a request to the REST API using given method, params. The response is returned back in the callback function.

`method` - method from REST API
`params` - params specific for the method
`callBack` - function which will handle the response from method or null.

There are some special non-restful `method`s which you can send to WU:

 * `goTop` - scrolls wu window to top
 * `showGrowl` - shows a growl popup with title and message: `wu.Messenger.sendMessageToWU('showGrowl', {title:'title',message:'message'});`
 * `closePopup` - closes current popup window (in which the JS code runs)
 * `refresh` - reloads wu window

Example:

```
<script>
wu.Messenger.sendMessageToWU('user/profile', {}, function(response){
                alert( response.user );
            });
</script>
```
