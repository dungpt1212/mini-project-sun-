<?php
session_start();
require_once ('connection.php');
if (isset($_GET['controller'])) {
	$controller = $_GET["controller"];;
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = 'index';
	}
} else {
	$controller = 'login';
	$action     = 'index';
}

require_once ('routes.php');

?>