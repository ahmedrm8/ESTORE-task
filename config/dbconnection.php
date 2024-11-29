<?php 
require 'credentails.php'; 

function pdo_connect_mysql(){
$host = '127.0.0.1';
$db = 'estore';
$user = 'root';
$pass = ''; 
$charset = 'ut8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options=[
	PDO::ATTR_ERRMODE                 =>PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE       =>PDO::FETCH_ASSOC,   
	PDO::ATTR_EMULATE_PREPARES  =>FALSE,
];
try{
	return new PDO($dsn,$user,$pass,$options);
}
catch(PDOException $e){
	throw new PDOException($e->getMassge(),(int)$e->getCode());

}

}