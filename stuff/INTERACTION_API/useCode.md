\WU_API::useCode( $address )
===

Includes code from another page.

This useful when you have the same code on multiple pages and want to avoid copy/pasting it.

`$address` - page address

Example:

```
<?php

\WU_API::useCode( 'people/profile-notes' );
```
