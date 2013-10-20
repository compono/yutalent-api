yu:talent API Documentation
===

yu:talent has a rich API feature set that works in conjunction with the Developer Framework to allow you to develop private and public plugins and applications to work inside and/or talk to the yu:talent system.  

Integrate your plugin into any area of yu:talent, listen for events and communicate interactively with the service. You have 3 API's to play with:

##[Interaction API](https://github.com/oneworldmarket/yutalent-api/tree/master/stuff/INTERACTION_API)
Used to register plugin triggers and hooks in the service. You can use it to append a new menu item, to show settings pages, to output debug information, to call a popup window or to add a completely new section or area to the system as a whole.

##[Javascript API](https://github.com/oneworldmarket/yutalent-api/tree/master/stuff/JS_API)
Used to communicate with the service - to asynchroniously send and receive data, update records and trigger events. It works on behalf of the currently logged-in user.

##[RESTful API](https://github.com/oneworldmarket/yutalent-api/tree/master/stuff/REST_API)
Useful if you build your own service with your own interface. You can use RESTful calls to receive and manage data on behalf of the user who gave you access permission.  

This API is based on OAuth2.0 authentication mechanism - to communicate with the yu:talent service you have to use one of the client libraries listed on this page: [http://oauth.net/2/][1]

[1]: http://oauth.net/2/

## API is still under development
We only went live recently, and while we think our Developer Framework rocks, we want your feedback and ideas. Please let us know what you think and how we can improve?

## How to get support
Before you do anything, please DO go and have a look at our tutorials and code snippets you can find in the [repository wiki](https://github.com/oneworldmarket/yutalent-api/wiki).

If you then need any support for our API's and the Developer Framework submit your questions via the [issues area of this repository](https://github.com/oneworldmarket/yutalent-api/issues?labels=&page=1&state=closed). Read the closed issues, especially the Developer FAQ that will guide you through most of the basic queries you will have.
