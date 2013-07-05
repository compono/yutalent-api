wu:talent Interaction API
===

The Interaction API is used to register plugin triggers and hooks in the service.  
You can use it to append a new menu item, to show settings pages, to output debug information or to call a popup window.

The Interaction API can be used in the code which you write on your application configuration page: [http://wutalent.co.uk/c/developer/configure/id/xxxx][1]

The configuration for plugins added to wu:talent are split into 3 areas:

 *   Descriptive information (icon for app, text and screenshots for website, etc)
 *   Initialization Code
 *   Pages

**Initialization Code** - executed on every request to wu:talent. It’s useful to register thnigs like settings pages and account menu items.  

**Pages Code** - executed only when user accesses a specific page. If you want to add a sidebar to the People contact section on the right hand side - this is the place to put the code.

*IMPORTANT BIT*

When you build forms ( <form> tag ), be sure to include the following inside form:

```
<input type="hidden" name="signed_request" value="<?php print $_REQUEST['signed_request'] ?>"/>
```

this is needed for interaction with API. If you didnt include it - after posting the form your script will be unable to interact with our api.

[1]: http://wutalent.co.uk/c/developer
