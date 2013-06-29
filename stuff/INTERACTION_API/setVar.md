\WU_API::setVar( $name, $value )
===

Stores a variable (of any type) until page reload / while user stays on current page.

This is useful if you want to pass data between different plugin windows/popups/functions.

Example:
```
<?php

\WU_API::setVar( 'mytempvar', array('val' => '123', 'somekey' => '456'));
```