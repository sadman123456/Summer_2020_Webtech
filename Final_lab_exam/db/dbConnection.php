<?php


$host='127.0.0.1';
$username='root';
$password='';
$name='Final-lab-task';


function dbConnection()
{
	global $host;
	global $uname;
	global $password;
	global $name;
        global $number;


	return mysqli_connect($host,$username,$name,$password,$number);
}



?>