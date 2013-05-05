\WU_API::showPopup( $title, $frameUrl, $params = array() )
===

Shows a popup box with the given `$title` and content from `$frameUrl`.  
If `$params` is not empty then it will be send in `$_POST['signedRequest']` variable to the destination frame and in that frame can be accessed using PHP or JS API.

Example:

```
<?php

\WU_API::showPopup( 'My first popup!', 'http://google.com', array( 'foo' => 'bar' ) );
```