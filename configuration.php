<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PWD', '');
define('DB', 'leave_management_system');

$connection=mysqli_connect(HOST,USERNAME,PWD,DB);
if($connection)
	{}
else{die(mysqli_error());}

?>