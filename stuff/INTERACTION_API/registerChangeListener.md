\WU_API::registerChangeListener( $listenerClass )
===

Registers a listener which listens for object changes.

This hook works when a record is updated in database, which means that there is no interface and no interaction with the user.

Currently listener support these types:

 * `profile` - changes in profile record
 * `candidate` - changes in candidate record

Listener class consists of one function: `onChange( $type, $newData, $modifiedFields, $oldFields)`

 * `$type` - type of record which changed (`profile` or `candidate`)
 * `$newData` - new record data. This data is very raw. To check the data that gets returned, use the example given at bottom of this document
 * `$modifiedFields` - associative array of fields which were modified for the given record (again it's raw data)
 * `$oldFields` - associative array of old values of modified fields

As this listener listens for object events and is not related to pages - it has to be put in the init code of the plugin.

Example:

```
<?php
//
// code situated in 'init' area
//
class listenerClass
{
    public function onChange( $type, $newData, $modifiedFields, $oldFields )
    {
        if( $type == 'candidate')
        {
            $host = ((isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")?'https':'http') . '://' . $_SERVER['HTTP_HOST'];

            $client = new \Zend_Http_Client();
            $client->setUri( $host . '/d/sandbox/debug.php' );
            $client->setConfig(array(
                'maxredirects' => 0,
                'timeout'      => 30));

            /* do something only if status was changed */
            /*

            if( isset( $modifiedFields['Status'] ) || isset( $modifiedFields['StatusExtra'] ) )
            {
                //get new candidate data
                $candidate = \WU_API::apiCall('candidates/get', array('id' => $newData['id']));

                //do something with candidate
            }

            */

            $client->setParameterPost(array(
                'type'  => $type,
                'newData'   => $newData,
                'modifiedFields' => $modifiedFields,
                'oldFields' => $oldFields,
                '_debug_email' => '<put in here your email address>' // put in here your email address to get the debug info
            ));

            /*$response = */$client->request('POST');
        }
    }
}

\WU_API::registerChangeListener('listenerClass');
```
