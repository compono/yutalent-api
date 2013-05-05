WU:Talent Interaction API
===

Interaction API is used to register plugin triggers and hooks in the service.  
You can use it to append a new menu item, to show settings pages, to output debug information or to call a popup window.

Interaction API can be used in the code which you write on configuration page: [http://wutalent.co.uk/c/developer/configure/id/xxxx][1]

Configuration is splitted into 3 areas:

 *   Descriptive part
 *   Initialization part
 *   Pages part

We interested only in last 2 parts as they should be coded.  
Initialization part Code inside this part is executed on every request to WU. It’s useful to register settings pages and account menu items.  
Pages part Code inside this part will be executed only when user will access a specified page. If you want to add sidebar to People section - it’s the right place to put the code.

[1]: http://wutalent.co.uk/c/developer