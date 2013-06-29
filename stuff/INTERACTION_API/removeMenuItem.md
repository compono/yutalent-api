\WU_API::removeMenuItem( $menuName, $menuLink )
===

Removes an menu item from the given menu.

`$menuName` - name of the menu from where item should be deleted (you can get available menu names in the `registerMenuItem` documentation).

`$menuLink` - link which should be deleted.

Example:

```
\WU_API::removeMenuItem( 'topnav', '/c/search' );
```
