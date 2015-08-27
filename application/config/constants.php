<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* constants */

  $config['site_name'] = 'Document Repository';//name of website

	define('BASE_URL', 'http://localhost/dms/');#Set to HTTPS:// if SECURE_MODE = TRUE

	define('SITE_TITLE', "Document Repository");

	define('SITE_SLOGAN', "DMS");

	define('SITE_ADMIN_MAIL', "dev@newwavetech.co.ug");

	define('SITE_ADMIN_NAME', "DMS Admin");

	define('SYS_TIMEZONE', "Africa/Nairobi");

	define('NUM_OF_ROWS_PER_PAGE', "10");

	define('IMAGE_URL', BASE_URL."images/");

	define('HOME_URL', getcwd()."/");

	define('UPLOAD_DIRECTORY',  HOME_URL."uploads/");

	define('MAX_FILE_SIZE', 40000000);

	define('ALLOWED_EXTENSIONS', ".doc,.docx,.txt,.pdf,.xls,.xlsx");

	define('MAXIMUM_FILE_NAME_LENGTH', 100);

	define("MINIFY_JS", true);

	define("NOREPLY_EMAIL", "dev@newwavetech.co.ug");

	define("APPEALS_EMAIL", "info@newwavetech.co.ug");

	define("SECURITY_EMAIL", "info@newwavetech.co.ug");


	/*
	|--------------------------------------------------------------------------
	| URI PROTOCOL
	|--------------------------------------------------------------------------
	|
	| The default setting of "AUTO" works for most servers.
	| If your links do not seem to work, try one of the other delicious flavors:
	|
	| 'AUTO'
	| 'REQUEST_URI'
	| 'PATH_INFO'
	| 'QUERY_STRING'
	| 'ORIG_PATH_INFO'
	|
	*/

	define('URI_PROTOCOL', 'AUTO');



	define('MAILID_TO_REDIRECT', "dev@newwavetech.co.ug");

/*
 *---------------------------------------------------------------
 * QUERY CACHE SETTINGS
 *---------------------------------------------------------------
 */

	define('ENABLE_QUERY_CACHE', TRUE);

 	define('QUERY_FILE', HOME_URL.'application/helpers/queries_list_helper.php');


/* End of file constants.php */
/* Location: ./application/config/constants.php */
