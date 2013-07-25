\WU_API::openUrl( $link )
===

Opens url in current window.

Parameters:

 * `$link` - new url which should be loaded in current window

Example:

```
<?php

class menuClass
{
    public function clickAction()
    {
        \WU_API::openUrl( 'http://google.com' );
    }
}

\WU_API::registerMenuItem('settings', 'menuClass', 'Google me!');

```