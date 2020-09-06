<?php


$host='127.0.0.1';
$uname='root';
$password='';
$name='Final-lab-task';


function dbConnection()
{
	global $host;
	global $authorname;
	global $password;
	global $name;
        global $number;


	return mysqli_connect($host,$authorname,$name, $number);
}



?>