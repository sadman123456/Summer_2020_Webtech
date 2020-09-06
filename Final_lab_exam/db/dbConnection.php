<?php


$host='127.0.0.1';
$uname='root';
$password='';
$name='Final-lab-task';


function dbConnection()
{
	global $host;
	global $uname;
	global $password;
	global $name;

	return mysqli_connect($host,$uname, '', $name);
}



?>