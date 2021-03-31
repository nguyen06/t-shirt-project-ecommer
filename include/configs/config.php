<?php
// SITE ROOT contains the full path to the tshirtshop folder
define('SITE_ROOT',dirname(dirname(dirname(__FILE__))));
// Application directories
define('PRESENTATION_DIR',SITE_ROOT . '/presentation/');
define('BUSINESS_DIR',SITE_ROOT . '/business/');

// Setting needed to configure the smarty template engine
define('SMARTY_DIR', SITE_ROOT . '/libs/smarty/');
define('TEMPLATE_DIR', PRESENTATION_DIR . 'templates');
define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . '/include/configs');

// ErrorHandler
// These should be true while developing the web site
define('IS_WARNING_FATAL',true);
define('DEBUGGING',false);

//the error type to be reported
define('ERROR_TYPES',E_ALL ^ E_DEPRECATED);

//Setting about mailing the error messages to admin
define('SEND_ERROR_MAIL',false);
define('ADMIN_ERROR_MAIL','Administrator@example.com');
define('SENDMAIL_FROM','Errors@example.com');
ini_set('sendmail_from',SENDMAIL_FROM);

// By default we don't log errors to a file
define('LOG_ERRORS',false);
//define('LOG_ERRORS_FILE','c:\\tshirtshop\\errors_log.txt'); // windows
define('LOG_ERRORS_FILE',SITE_ROOT . '/logs/errors.log');
define('SITE_GENERIC_ERROR_MESSAGE','<h1>TShirtShop Error!<h1>');

// database connectivity setup
define('DB_PERSISTENCY', 'false');
define('DB_SERVER', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_DATABASE','tshirtshop');
define('PDO_DSN','mysql:host=' . DB_SERVER . ';dbname=' .DB_DATABASE);

//Server HTTP port 
define('HTTP_SERVER_PORT','8888');
define('VIRTUAL_LOCATION','/tshirtshop/');

//Config product lists display options
define('SHORT_PRODUCT_DESCRIPTION_LENGTH',150);
define('PRODUCTS_PER_PAGE',4);

// minimum word length for search
define('FT_MIN_WORD_LEN',4);

// Paypal configuration 
define('PAYPAL_URL', 'https://www.paypal.com/cgi-bin/webscr');
define('PAYPAL_EMAIL','nnthinh88@gmail.com');
define('PAYPAL_CURRENCY_CODE','USD');
define('PAYPAL_RETURN_URL','http://www.example.com');
define('PAYPAL_CANCEL_RETURN_URL','http://wwww.example.com');

define('USE_SSL', 'no');

define('ADMIN_USERNAME', 'tshirtshopadmin');
define('ADMIN_PASSWORD', 'tshirtshopadmin');
?>