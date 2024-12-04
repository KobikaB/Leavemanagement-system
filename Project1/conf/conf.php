<?php
define('HOST','localhost');
define('PWD','');
define('USERNAME','root');
define('DB','Leave_Management_System');
$connection=mysqli_connect(HOST,USERNAME,PWD,DB);
if($connection){
echo"Database Connected";
echo"<hr>";}
else{
	die("error".mysqli_connect_error());	
}

?>