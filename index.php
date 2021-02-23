
<?php 

// Active session
session_start();

//start output buffer
ob_start();

require_once 'include/configs/config.php';

//require_once BUSINESS_DIR . 'error_handler.php';

//set the error handler
//ErrorHandler::SetHandler();

require_once PRESENTATION_DIR . 'application.php';
require_once PRESENTATION_DIR . 'link.php';
//load the database page template
require_once BUSINESS_DIR . 'database_handler.php';

// load the business tier
require_once BUSINESS_DIR . 'catalog.php';

//URL correction
Link::CheckRequest();

$application = new Application();

$application->display('store_front.tpl');

// close databse connection
DatabaseHandler::Close();

// output content from the buffrter
flush();
ob_flush();
ob_end_clean();

/*
// try to load inexistent file
require_once 'inexistent_file.php';
*/
?>