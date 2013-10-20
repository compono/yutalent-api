\WU_API::noCredits( $requiredCredits = null, $availableCredits = null )
===

Show standard yu:talent popup which will inform user they do not have enough credit for requested action.

If `$requiredCredits` is provided - it will add text: "Required amount of credits is: ..."

If `$availableCredits` is provided - it will add text: "You have ... credits"

Example:

```
<?php

\WU_API::noCredits(4, 1);
```
