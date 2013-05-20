\WU_API::registerPopup( $pageClass )
===

Registers a popup page

`$pageClass` - a class which is responsible for page in popup box. This is the same class as in `\WU_API::addPageTab`.

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