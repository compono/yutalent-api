wu:talent API Documentation
===

wu:talent has a rich API feature set that works in conjunction with the Developer Framework to allow you to develop private and public plugins and applications to work inside and/or talk to the wu:talent system.  

Integrate your plugin into any area of wu:talent, listen for events and communicate interactively with the service. You have 3 API's to play with:

##[Interaction API](https://github.com/oneworldmarket/wutalent-api/tree/master/INTERACTION_API)
Used to register plugin triggers and hooks in the service. You can use it to append a new menu item, to show settings pages, to output debug information, to call a popup window or to add a completely new section or area to the system as a whole.

##[Javascript API](https://github.com/oneworldmarket/wutalent-api/tree/master/JS_API)
Used to communicate with the service - to asynchroniously send and receive data, update records and trigger events. It works on behalf of the currently logged-in user.

##[RESTful API](https://github.com/oneworldmarket/wutalent-api/tree/master/REST_API)
Useful if you build your own service with your own interface. You can use RESTful calls to receive and manage data on behalf of the user who gave you access permission.  

This API is based on OAuth2.0 authentication mechanism - to communicate with the wu:talent service you have to use one of the client libraries listed on this page: [http://oauth.net/2/][1]

[1]: http://oauth.net/2/

## API is still under development
We only went live recently, and while we think our Developer Framework rocks, we want your feedback and ideas. Please let us know what you think and how we can improve?

## How to get support
We discuss support for our API's and the Developer Framework in our [Technical LinkedIn Forum Group](http://www.linkedin.com/groups?home=&gid=5043598&trk=anet_ug_hm) - register here, it'll give you lots of useful information to search plus its a direct link to our technical team if you need it.
