<?php
	function login($user,$pwd,$rememberMe,$connection)
	{
		$query="SELECT * FROM USER WHERE USERNAME ='$user' AND PASSWORD ='$pwd'";
		$result = mysqli_query($connection,$query);
		$count = mysqli_num_rows($result);
		if ($count == 1) {
			if ($rememberMe) {
				//setcookie('name','value','expire date');
				setcookie('user',$user,time()+3600);
			} else {
				session_start();
				$_SESSION['user']=$user;
			}
			header("location:profile.php");
		} else {
			echo "Please check your username and password";
		}
	}

	function RequiredField($value,$msg="the field can't be empty")
	{
		if (empty($_POST[$value])) {
			echo $msg;
			return false;
		} else {
			return true;
		}
		
	}
?>

<!-- MariaDB [leave_management_system]> insert into user values('2019asp01','Abc@1234');
Query OK, 1 row affected (0.557 sec)

MariaDB [leave_management_system]> insert into user values('2019asp02','Abc@456');
Query OK, 1 row affected (0.121 sec)

MariaDB [leave_management_system]> insert into user values('2019asp03','Abc@459');
Query OK, 1 row affected (0.107 sec) -->