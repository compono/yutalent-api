\WU_API::addPageTab( $pageClass )
===

Adds a new tab to the existing page.

`$pageClass` - class of the page in tab.

It has to support the following methods:

*  `public function getFrameUrl()` - Should return url of a page which will be loaded in iframe.
*  `public function getTitle()` - should return a page title.

The class can also have custom methods which can be called from JS API in the format: `public function <event>Action($params){}`.

Example:

```php
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
        \WU_API::showPopup( 'yahooPopup' );
    }
}

class yahooPopup
{
    protected $frameUrl = 'http://yahoo.com';
    protected $title = 'Yahooch';

    public function getFrameUrl() {
        return $this->frameUrl;
    }

    public function getTitle() {
        return $this->title;
    }
}

\WU_API::addPageTab( 'pageTabClass' );
\WU_API::registerPopup( 'yahooPopup' );
```

Then add this call somewhere in the JS API:

```js
function showYahooch() {
    WU_API.Messenger.sendMessageToWU('event/popup');
}
```

The example code above will open a popup with Yahoo search when the js function is called.
