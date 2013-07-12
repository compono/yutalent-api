credits/getAppCredits
===

Returns amount of credits which user has for your application.
We handle all product and ecommerce stuff ourselves so you dont have to care much about it.

This method has no params.

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