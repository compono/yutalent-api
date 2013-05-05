WU:Talent API Documentation
===

WU:Talent has a rich API feature set.  
It allows you to integrate your plugin into all parts of WU, to listen for events and to interactively communicate
with the service.  
Our APIs include:

*  Interaction API
*  Javascript API
*  RESTful API

## Interaction API
This is used to register plugin triggers and hooks in the service. You can use it to append a new menu item, to show settings pages, to output debug infofrmation or to call a popup window.

## Javascript API
This is used to communicate with the service, to asynchroniously send and receive data,
update records and trigger events. It works on behalf of currently logged in user.

## RESTful API
This is very useful if you build your own service with your own interface.  
You can use RESTful calls to receive and manage any data on behalf of user who gave you permission.  
This API is based on OAuth2.0 authentication mechanism and therefore to communicate with WU service you have to use one of the client libraries listed on this page: [http://oauth.net/2/][1]

[1]: http://oauth.net/2/