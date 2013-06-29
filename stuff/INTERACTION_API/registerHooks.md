\WU_API::registerHooks( $hookClass )
===

Registers a hook which listens for page events and data during page rendering and execution process.

Currently supported hooks:

* Page People/Company list
    - `statusBlockTitle( $title )` - triggers for each status block during rendering. Allows to add (using `return`) custom data after status block title.

Every hook function in the class should be written in the following format: `public function on<HookWithUppercasedFirstLetter>($listOfParams, ...)`

Example:

```
class linkClass
{
    public function clickAction()
	{
		\WU_API::showPopup('Invite to video interview', 'http://google.com');
	}
}

class hooksClass
{
    public function onStatusBlockTitle($title)
	{
		if( $title == 'Shortlist' )
		{
			return \WU_API::htmlLink('Invite to video interview', 'linkClass');
		}
	}
}

\WU_API::registerLink( 'linkClass' );
\WU_API::registerHooks('hooksClass');
```