credits/decreaseAppCredits
===

Decrease assigned credits by specified amount.

This method has one param:

 * `amount` - amount of credits to deduct

Example

```
<?php

//in init area

$creditsLeft = \WU_API::apiCall('credits/getAppCredits');

if( $creditsLeft <= 0 )
 {
    \WU_API::noCredits(1, $creditsLeft); // show message about lack of credits and button with optino to buy more
 }
 else
 {
    \WU_API::showAlert( 'You have ' . $creditsLeft . ' credits left!' );

    \WU_API::apiCall('credits/decreaseAppCredits', array('amount' => 1)));
 }

```