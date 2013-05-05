\WU_API::useCode( $address )
===

Includes code from other page.  
This useful when you have same code on multiple pages and want to avoid copypasting it.

`$address` - page address

Example:

```
<?php

\WU_API::include( 'people/profile-notes' );
```