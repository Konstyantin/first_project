<?php

/**
 * Set display errors
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'Db/DB.php';
/**
 * @var string $LogsContent Erorr logs
 */
$LogsContent = file_get_contents('Logs/errors.log');
