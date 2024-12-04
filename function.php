<?php

function login($usr,$pwd,$keeplogged,$connection)
	{
		$query="SELECT * FROM user WHERE Username = '$usr' AND password='$pwd' ";
		$result=mysqli_query($connection,$query);
		$count=mysqli_num_rows($result);
		if($result)
			{ 
				if($count == 1)
				{
					if($keeplogged)
					{
						if($usr == 'admin')
						{
							setcookie('admin',$keeplogged,time()+3600);
							$_COOKIE['admin'];	
						}
						else
						{
							setcookie('staff',$keeplogged,time()+3600);
							$_COOKIE['staff'];
						}
						
					}
					else
					{
						if($usr == 'admin')
						{
							session_start();
							$_SESSION['admin']=$usr;
							header("location:home_admin.php");
						}
					else
						{
							session_start();
							$_SESSION['staff']=$usr;
							header("location:home_staff.php");
						}
					}
					

				}
				else
				{
					echo "<p style='color:red;'><center>Please check your username & password</center></p>";
				}
				
			}
		else
		{
			die("Error ".mysqli_error($connection));
		}
	}



?>