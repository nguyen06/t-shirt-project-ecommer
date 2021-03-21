<?php
// Active session
session_start();

// Start output buffer
ob_start();

// Include utility files
require_once 'include/configs/config.php';
require_once BUSINESS_DIR . 'error_handler.php';

// Set error handler
ErrorHandler::SetHandler();

// Load application page template
require_once PRESENTATION_DIR . 'application.php';
require_once PRESENTATION_DIR . 'link.php';

// Load database handler
require_once BUSINESS_DIR . 'database_handler.php';

?>