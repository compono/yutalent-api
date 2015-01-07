contacts/add
===

Adds a contact to yu:talent.
Please notice that it doesn't check for duplicates, we expect that if you're adding a candidate - then it's someone whom you don't have yet in you database.

Parameters:
 * `status_id` - status id (`statuses/list` api call), default is 'New'
 * `project_id` - project id (`projects/list` api call), required
 * `type` - category id (`contacts/categories` api call), required
 * `data` - personal info of contact
   * `name` - first and last name (example: `Vitaly Dyatlov`), required
   * `background_info` - background information
   * `company_name` - company name
   * `company_website` - company website
   * `email` - email address
   * `location` - contact address
   * `history` - work history
   * `education` - contact education
   * `facebook` - link to facebook
   * `twitter` - link to twitter
   * `linkedin` - link to linkedin profile
   * `phone` - phone
   * `phone_mobile` - mobile phone
   * `position` - current title
   * `cv` - either base64 encoded content of CV or an array: `content` - base64 encoded content, `name` - cv file name
   * `avatar` - base64 encoded avatar image, should be `jpg`, `png` or `gif`

Example:

Restful call from Raw PHP:
```
$contact = array(
  'status_id' => 1,
  'project_id' => 123,
  'type' => 45,
  'data' => array(
    'name' => 'Vitaly Dyatlov',
    'background_info' => 'Web developer at yutalent.co.uk. Have big experience in LAMP stack, and more than 7 years of PHP development',
    'company_name' => 'yu:talent',
    'company_website' => 'http://yutalent.co.uk',
    'email' => 'vitaly@yutalent.com',
    'location' => 'Moldova, Tiraspol',
    'history' => "idibu inc - 2009 to Present\nTechnical lead\nyu:talent - 2012 to Present\nTechnical lead\ntask.io - 2014 to Present\nTechnical lead",
    'education' => '2005-2010 - Transnistrian Government University, Software Engineering',
    'facebook' => 'http://facebook.com/vdyatlov',
    'linkedin' => 'http://linkedin.com/in/vdyatlov',
    'phone' => '+373 533 55383',
    'phone_mobile' => '+373 777 15818',
    'position' => 'technical lead at task.io, yu:talent, idibu',
    'cv' => array( 'content' => 'some base64 encoded content', 'name' => 'VitalyDyatlov.pdf'),
    'avatar' => 'base64 encoded avatar image'
  )
);
$data = $WU_API->sendMessageToWU( 'contacts/add', array( 'status' => 'New' ) );
var_export( $data );
```
