\WU_API::noCredits( $requiredCredits = null, $availableCredits = null )
===

Show standard WU popup which will say that user has not enough credits.

If `$requiredCredits` provided - it will add text: "Required amount of credits is: ..."

If `$availableCredits` provided - it will add text: "You have ... credits"

Example:

```
<?php

\WU_API::noCredits(4, 1);
```