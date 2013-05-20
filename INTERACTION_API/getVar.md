\WU_API::getVar( $name )
===

Gets variable which was previously set by `\WU_API::setVar`.

If `$name` wasn't set yet, then method will return `null`.

Example:
```
<?php

class menuClass
{
    public function clickAction()
    {
        $var = \WU_API::getVar( 'mytempvar' );

        \WU_API::debug( $var );
    }
}

\WU_API::registerMenuItem('settings', 'menuClass', 'test variables');

\WU_API::setVar( 'mytempvar', array('val' => '123', 'somekey' => '456'));
```