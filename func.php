<?php
function getTable($query,$conn)
{
	$result = mysqli_query($conn,$query);
	$arr = array();
	if ($result) {
		while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) {
			array_push($arr, $row);
		}
		
	} else {
		die("Error ".mysqli_error($conn));
	}

	return $arr;
	
}

function ExecuteQuery($query,$conn)
{
	$result = mysqli_query($conn,$query);
	if ($result) {	
		return "Done !";
	} else {
		return ("Error ".mysqli_error($conn));
	}	
}

function login($username,$password,$keeploged,$conn)
{
	$query = "select * from logintb where username = '$username' and password = '$password'";
	$result = mysqli_query($conn,$query);
	if($result){
		$count = mysqli_num_rows($result);
		if ($count == 1) {
			$row = mysqli_fetch_array($result,MYSQLI_NUM);
			if ($keeploged) {
				setcookie('user',$row[0],time()+3600);
				echo "check";
			}
			else{
				session_start();
				$_SESSION['user']=$row[0];
			}
			header('location:index.php');
		}
		else{
			echo "<p style='color:red'>Please check your username and password !</p>";
		}
	}
	else{
		die("Error ".mysqli_error($conn));
	}
}

?>