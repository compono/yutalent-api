notes/add
===

Adds a note for a given candidate

Parameters:

`candidate_id` - candidate id to whom we'll add a note
`message` - note body

Example:

```
//JS API
wu.Messenger.sendMessageToWU('notes/add', {"message":"Hello World from WU API!"});
```