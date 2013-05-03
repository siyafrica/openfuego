<?php
/**
  * Hola.
  * This is the primary configuration file for OpenFuego.
  * You must edit the values below before getting started.
  * You should not edit any other files.
  *
  * OpenFuego requires PHP >= 5.3.0 and MySQL 5.
  * Only POSIX operating systems (not Windows) are supported.
**/

/** Leave this false unless you're having trouble. */
define('OPENFUEGO_DEBUG', FALSE);

/** Your time zone. http://www.php.net/manual/en/timezones.php
  * Harvard time is 'America/New_York'
**/
date_default_timezone_set('America/New_York');

/** Your database credentials.
  * Only MySQL is supported, hipsters.
**/
define('OPENFUEGO_DB_NAME', 'XXXX');
define('OPENFUEGO_DB_USER', 'XXXX');
define('OPENFUEGO_DB_PASS', 'XXXX');
define('OPENFUEGO_DB_HOST', 'localhost'); // if you don't know, localhost
define('OPENFUEGO_DB_PORT', 3306); // if you don't know, 3306

/** Time to curate.
  * Specify the usernames of authorities at the center of OpenFuego's universe.
  * Typically 5–15 people, but no minimum or maximum. No @ symbols.
**/
$openfuego_authorities = array(
	'authority1',
	'authority2',
	'authority3',
	'authority4',
	'authority5',
	'authority6',
	'authority7',
	'authority8',
	'authority9',
);

/** Your email address, for error reporting. */
define('OPENFUEGO_WEBMASTER', 'xxxx@harvard.edu');

/** How many days should OpenFuego keep links in its database? Default is 1 (24 hours). Must be an integer. */
define('OPENFUEGO_EXPIRATION_INT', 1); // 

/** Your Twitter credentials. If you don't have any yet, visit https://dev.twitter.com and sign in.
  * Click "Create an app" and follow the instructions. Create an app with READ and WRITE access.
  * Then generate new access tokens. Don't share the secrets with anyone.
**/
define('OPENFUEGO_TW_SCREEN_NAME', 'xxxx');
define('OPENFUEGO_TW_CONSUMER_KEY', 'xxxx');
define('OPENFUEGO_TW_CONSUMER_SECRET', 'xxxx');
define('OPENFUEGO_TW_ACCESS_TOKEN', 'xxxx-xxxx');
define('OPENFUEGO_TW_ACCESS_TOKEN_SECRET', 'xxxx');

/** Your Bitly credentials. Visit this page to grab them: http://bitly.com/a/your_api_key 
  * Optional, recommended. Leave blank to disable.
**/
define('OPENFUEGO_BITLY_USERNAME', '');
define('OPENFUEGO_BITLY_API_KEY', '');

/** Your Goo.gl API credentials. Visit this page for instructions: https://developers.google.com/url-shortener/v1/getting_started#APIKey 
  * Optional, recommended.
**/
define('OPENFUEGO_GOOGL_API_KEY', ''); // Optional, recommended. Leave blank to disable.

/** Your Embed.ly API credentials. Visit this page for a free account: http://embed.ly/embed/pricing 
  * Optional, but required for OpenFuego to return metadata with URLs.
**/
define('OPENFUEGO_EMBEDLY_API_KEY', ''); // Optional, recommended. Leave blank to disable.


/**
  * All done, no more editing!
**/


if (OPENFUEGO_DEBUG == TRUE)
	ini_set('display_errors', 1);
else
	ini_set('display_errors', 0);

define('OPENFUEGO_DIR', dirname(__FILE__));

require_once(OPENFUEGO_DIR . '/openfuego-settings.php');
?>