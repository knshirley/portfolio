<?php
define('SERVER_ROOT',  $_SERVER['DOCUMENT_ROOT'] . '/portfolio');      
define('SITE_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/portfolio');  

//set to default page when loading website
define('DEFAULT_CONTROLLER', 'Home');
define('DEFAULT_ACTION', 'main');

require("sys/router.php");
?>
