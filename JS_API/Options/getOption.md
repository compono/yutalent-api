getOption( optionName )
===
Returns the requested option from WU.

optionName can be any string but these names are predefined:

*  request - get the array of request params
*  domain - domain of the api server (usually wutalent.co.uk)
*  appId - identifier of the application

Example:

```
<script>
var request = wu.Options.getOption('request');
console.log( request );
</script>
```