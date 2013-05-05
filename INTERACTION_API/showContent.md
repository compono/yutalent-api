\WU_API::showContent( $title, $frameUrl, $wrapper, $params = array() )
===

The same as `\WU_API::showPopup` but instead of displaying a popup box it loads content in the `$wrapper` area on the page.  
`$wrapper` - any jquery selector to find the area where to load content.

Example:

```
<?php

\WU_API::showContent( 'Hello world!', 'http://google.com', '#content');
```