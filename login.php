<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
        require_once'configuration.php';
        require_once'function.php';
    ?>

    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: :#f4f4f4;
            text-align:center;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url('Lvm.png') no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .login-container {
            max-width: 850px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-btn-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .login-btn {
            flex: 1;
            margin-right: 10px;
            border: none;
            border-radius: 4px;
            font-size: 24px;
            color: #fff;
            cursor: pointer;
        }

        .student-btn {
            background-color: #3498db;
        }

        .staff-btn, .admin-btn {
            background-color: #3498db;
        }

        /* Hidden by default, shown when the form is opened */
        .login-form {
            display: none;
            margin-top: 20px;
        }
       .corner-image {
            position: absolute; /* Set absolute positioning */
            top: 0; /* Position at the top */
            left: 0; /* Position at the left */
            max-width: 500px; /* Set a maximum width for the image */
            max-height: 500px; /* Set a maximum height for the image */
        }
        /* Style for the form */
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

    </style>
    <title>Login Form</title>
</head>
<body>

    <div class="login-container" id="loginContainer">
       <img class="corner-image" src="Logo.png" alt="Corner Image">

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td><input type="text" name="usr" placeholder="username"></td>
            </tr>
            <tr>
                <td style="color:red; text-align: center; text-indent: 30px;"><?php if(isset($_POST['usr'])) {EmptyCheck('usr',"Please provide the username !");} ?></td>
            </tr>
            <tr>
                <td><input type="password" name="pwd" placeholder="password"></td>  
            </tr>
            <tr>
                <td style="color:red; text-align: center; text-indent: 30px;"><?php if(isset($_POST['pwd'])) {EmptyCheck('pwd',"Please provide the password !");} ?></td>
            </tr>
            <tr>
                <td style="color: #4b0150; text-align: center; text-indent: 40px;"><input type="checkbox" name="keepme" value="true">  Keep Me Login !</td>
            </tr>
            <tr>
                <td><br><input type="submit" name="btn" value="Login"></td>
            </tr>
        </table>
    </form>

    </div>

</body>
</html>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $usr=trim($_POST['usr']);
    $pwd=trim($_POST['pwd']);


    $keeploged = false;

    if (isset($_POST['keep'])) 
    {
        $keeploged = true;
    }
    session_start();
    $_SESSION['user']=$usr;

    if(!empty($usr) && !empty($pwd))
    {
        login($usr,$pwd,$keeplogged,$connection);  
    }
}

function EmptyCheck($chk,$msg)
{
    if(empty($_POST['$chk']))
        {
            echo "$msg"; 
            return false;
        }
    else
        { 
            return true;
        }
}

?>