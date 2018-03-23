<?php
namespace app;
/**
* 
*/
class Config
{

/**
* inittial website
*/
public function maintenance_web(){
	if($this->maintenanceWeb()){
		header("Location:".get_home_url()."/maintenance");
	}
}
/**
* under contruction
*/
public function maintenanceWeb(){
	return false;
}
/**
* database connections
*/
public function db(){
	$config = new \Doctrine\DBAL\Configuration();
	$connectionParams = array(
		'dbname' => DB_NAME,
		'user' => DB_USER,
		'password' => DB_PASSWORD,
		'host' => DB_HOST,
		'driver' => 'mysqli',
	);
	return \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
}


}
?>