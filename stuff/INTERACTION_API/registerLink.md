\WU_API::registerLink( $linkClass )
===

Registers a new link handler.

`$linkClass` - name of the class which will handle events. Currently we support only `click` event.

Events should be written in the following format: `public function <event>Action(){}`.

For a complete example please check `registerHooks` documentation.