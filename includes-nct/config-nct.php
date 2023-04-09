<?php
ob_start();



	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	error_reporting(1);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	define("DB_CHAR","utf8");

	define("DB_DEBUG",false);

	global $db, $fields, $module, $adminUserId, $sessUserId, $isJoinPopup,$sessUserType, $sessNotification;

	$header_panel=true;

	$footer_panel=true;

	$left_panel=false;

	$slider_panel = false;

	$right_panel=false;

	$isPopup=false;

	require_once('constant-nct.php');


	$objPost = new stdClass();
