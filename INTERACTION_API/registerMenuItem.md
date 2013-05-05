\WU_API::registerMenuItem( $menuName, $className, $menuItemTitle )
===

Adds a new menu item to the specified `$menuName` menu.  
We currently support only `settings` menu - menu in the top-right corner of the WU service (account settings menu).

`$menuItemTitle` - title of the menu item

`$className` - class of the menu. It is responsible for all menu events and actions.

For menus we currently support just one event: `click`.

To handle events in the class you have to use functions with name `<event>Action`.

Example:

```
<?php
class menuClass
{
    public function clickAction()
	{
		\WU_API::showAlert('Hey, I was just clicked!');
	}
}

\WU_API::registerMenuItem('settings', 'menuClass', 'New popup item');
```