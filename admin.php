<?php
// Active session
session_start();

// start output buffer
ob_start();

 // Include itility files
require_once 'include/configs/config.php';
//require_once BUSINESS_DIR . 'error_handler.php';

// Set the error handler
//ErrorHandler::SetHandler();

// Load the application page template
require_once PRESENTATION_DIR . 'application.php';
require_once PRESENTATION_DIR . 'link.php';

// Load the database handler
require_once BUSINESS_DIR . 'database_handler.php';

// Load business tier
require_once BUSINESS_DIR . 'catalog.php';

// Load smarty templet
$application = new Application();

// Display the page
$application->display('store_admin.tpl');

// close database connection
DatabaseHandler::Close();

//output content from the buffer
flush();
ob_flush();
ob_end_clean();



?>