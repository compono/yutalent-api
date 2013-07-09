\WU_API::registerChangeListener( $listenerClass )
===

Registers a listener which listens for object changes.
This hook works when record is updated in database, which means that there is no interface and no interaction with the user.

Currently listener support these types:

 * `profile` - changes in profile record
 * `candidate` - changes in candidate record

Listener class consists of one function: `onChange( $type, $newData, $modifiedFields)`

 * `$type` - type of record which changed (`profile` or `candidate`)
 * `$newData` - new record data. This data is very raw. To see what data is returned, use the example given at bottom of this document
 * `$modifiedFields` - array of fields which were modified for the given record (its again about raw data)

As this listener listens for object events and not related to pages - it has to be put in init code of plugin in the development area.

Example:

```
<?php
//
// code situated in 'init' area
//
class listenerClass
{
    public function onChange( $type, $newData, $modifiedFields )
    {
        if( $type == 'candidate')
        {
            $host = ((isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")?'https':'http') . '://' . $_SERVER['HTTP_HOST'];

            $client = new \Zend_Http_Client();
            $client->setUri( $host . '/d/sandbox/debug.php' );
            $client->setConfig(array(
                'maxredirects' => 0,
                'timeout'      => 30));

            $client->setParameterPost(array(
                'type'  => $type,
                'newData'   => $newData,
                'modifiedFields' => $modifiedFields,
                '_debug_email' => '<put in here your email address>' // put in here your email address to get the debug info
            ));

            /*$response = */$client->request('POST');
        }
    }
}

\WU_API::registerChangeListener('listenerClass');
```