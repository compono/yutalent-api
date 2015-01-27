\WU_API::setPublicUrl( $url )
===

Sets plugin's public url which will be shown in iframe when user will go by this link:
http://yutalent.co.uk/c/applications/public?appId=<application id>&params=<set of params here>

This is usually need when your plugin wants to share something.

Javascript has method for this: wu.Utils.getPublicUrl

In Video Interviews plugin it was used like this:

```tpl
var shareLink = wu.Utils.getPublicUrl({
                        'id': interview.interview.id,
                        'candidate': interview.candidate.id,
                        'account_id': '<?php print $account_id ?>'
                    });
```

Example:

```php
<?php

\WU_API::setPublicUrl( 'http://google.com/share' );
```
