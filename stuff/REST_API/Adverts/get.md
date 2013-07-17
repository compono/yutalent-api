adverts/get
===

Get information about an advert.

Parameters:

 * `id` - advert id

Example:

```
<?php

$advertInfo = \WU_API::apiCall('adverts/get', array( 'id' => 123 ) );

$debug = var_export( $advertInfo );

\WU_API::debug( $debug );
```

It will output something like this:

```
stdClass::__set_state(array(
   'id' => '214',
   'title' => 'iPad ',
   'reference' => 'Optional...',
   'project' =>
  stdClass::__set_state(array(
     'id' => '285',
  )),
   'date' =>
  stdClass::__set_state(array(
     'creation' => '2013-07-01 09:25:37',
     'expiry' => '2013-07-29 03:00:00',
  )),
   'live_count' => '1',
   'has_errors' => false,
   'is_archived' => false,
))
```