\WU_API::showPluginPage( $pageClass )
===

Shows a previously registered (using `registerPluginPage`) plugin page.

Example:

```php
<?php

class pluginPage1Class
{
    protected $frameUrl = 'http://site.com/1.php';
	protected $title = 'Account settings';
	
	public function getFrameUrl() {
		return $this->frameUrl;
	}
	
	public function getTitle() {
		return $this->title;
	}
}

class pluginPage2Class
{
	protected $frameUrl = 'http://site.com/2.php';
	protected $title = 'Interviews';
	
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
		\WU_API::showPluginPage('pluginPage1Class');
	}
}

\WU_API::registerPluginPage('pluginPage1Class');
\WU_API::registerPluginPage('pluginPage2Class');

\WU_API::registerMenuItem('settings', 'menuClass', 'Some Plugin settings');
```
