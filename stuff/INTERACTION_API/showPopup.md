\WU_API::showPopup( $pageClass, $params = array() )
===

Shows a popup box with the given `$pageClass` page inside.

If `$params` are not empty then it will be send in the `$_POST['signedRequest']` variable to the destination frame - that frame can then be accessed using the PHP or JS API's.

Example:

```
<?php
class menuPopup
{
	protected $frameUrl = 'http://google.com';
	protected $title = 'Googlepup';

	public function getFrameUrl() {
		return $this->frameUrl;
	}

	public function getTitle() {
		return $this->title;
	}
}

class menuClass
{
	public function clickAction()
	{
		\WU_API::showPopup('menuPopup', array( 'foo' => 'bar' ));
	}
}

\WU_API::registerMenuItem('settings', 'menuClass', 'Show popup!');
\WU_API::registerPopup('menuPopup');
```
