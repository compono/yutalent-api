\WU_API::getOption( $name )
===

Get global wu:wtalent's options.

Currently available just one option: search_active

Example:

```
<?php

$isSearchActive = \WU_API::getOption( 'search_active' );
```