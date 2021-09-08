<?php
// memory limit default value = 64M
ini_set('memory_limit','512M');
$dbconfig['db_server'] = 'localhost';
$dbconfig['db_port'] = ':3306';
$dbconfig['db_username'] = 'root';
$dbconfig['db_password'] = '';
$dbconfig['db_name'] = 'db_loginform';
$dbconfig['db_type'] = 'mysqli';
$dbconfig['db_status'] = 'true';

$dbconfig['db_hostname'] = $dbconfig['db_server'].$dbconfig['db_port'];

$adb = new PDO("mysql:host=".$dbconfig['db_server'].";dbname=".$dbconfig['db_name'],$dbconfig['db_username'],$dbconfig['db_password']);
		try {
		$adb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e)
		{
		  echo $e->getMessage();                         
		}
?>
