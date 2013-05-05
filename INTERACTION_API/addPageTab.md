\WU_API::addPageTab( $pageClass )
===

Adds a new tab to the existing page.

`$pageClass` - class of the page in tab.

It has to support the following methods:

*  `public function getFrameUrl()` - Should return url of a page which will be loaded in iframe.
*  `public function getTitle()` - should return a page title.

Also, the class can have custom methods which can be called from JS API in the format: `public function <event>Action($params){}`.

Example:

```
<?php

class pageTabClass
{
    protected $frameUrl = 'http://google.com';
    protected $title = 'Googlearch';
	
	public function getFrameUrl()
	{
		return $this->frameUrl;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
    
    public function popupAction()
    {
        \WU_API::showPopup( 'Yahooch', 'http://yahoo.com' );
    }
}

\WU_API::addPageTab( $pageTabClass );
```

Then somewhere  can be this call in the JS API:

```
function showYahooch() {
    WU_API.Messenger.sendMessageToWU('event/popup');
}
```

Code above will open a popup with Yahoo search when the js function will be called.