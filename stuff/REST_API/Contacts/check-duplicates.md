contacts/check-duplicates
===

Returns list of contacts which contain some of provided parameters

Parameters:

 * `phone` - contact phone
 * `phone_mobile` - mobile phone
 * `name` - first and last name of contact
 * `email` - contact email address

You can use this to check if user database already has a contact with one of given parameters in there. All parameters are `optional`.

Internally it uses `OR` to find records, like: phone=.. OR phone_mobile=.. OR name=.. OR email=..

Example:

Restful call from Raw PHP:
```
$data = $WU_API->sendMessageToWU( 'contacts/check-duplicates', array( 'phone' => '+373 777 15818' ) );
var_export( $data );
```
