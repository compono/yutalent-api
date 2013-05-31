wu:talent API Documentation
===

wu:talent has a rich API feature set that works in conjunction with the Developer Framework to allow you to develop private and public plugins and applications to work inside and/or talk to the wu:talent system.  

Integrate your plugin into any area of wu:talent, listen for events and communicate interactively with the service.

We have 3 key API's:

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
