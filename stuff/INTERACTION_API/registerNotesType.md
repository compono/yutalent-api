\WU_API::registerNotesType( $type, $options )
===

Registers a custom notes type which your plugin will be using. This function should be called in initialization area.

Parameters:

 * `$type` - type name, it can be a standard type (`email` or `note`) which you will override - or custom type with `plugin_` prefix
 * `options` - options for new type:
    * `icon.in` - icon for incoming notes
    * `icon.out` - icon for outgoing notes
    * `header.in` - header for incoming notes
    * `header.out` - header for outgoing notes

Example:

```
<?php

\WU_API::registerNotesType('plugin_sms', array(
	'icon' => array(
		'in' => '/static/images/plugin/sms-notes-icon-outbound.png',
		'out' => '/static/images/plugin/sms-notes-icon-reply.png'
	),
	'header' => array(
		'in' => 'SMS reply from',
		'out' => 'SMS sent to'
	)
));
```