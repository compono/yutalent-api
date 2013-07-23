timeline/add
===

Adds a timeline record

Parameters:

 * `type` - timeline record type, its required field and should be started from 'plugin_'.
 * any amount of other parameters, they all will be passed to timeline handler class ( For handler class look in interaction api: registerTimelineType).

Example:

```
//JS API
wu.Messenger.sendMessageToWU('timeline/add', {
        "type":"plugin_videointerview",
        "interview_id": 123,
        "candidate_id": "cnd_12abcdefe456",
        "interview_title": "Video Interview"
    }
);
```
