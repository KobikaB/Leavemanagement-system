<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="login-btn-container">
            <button class="login-btn student-btn"><a href="login.php" style="color: white;">Login as a Student</a></button>
            <button class="login-btn staff-btn" onclick="showLoginForm('staff')">Login as a Staff</button>
            <button class="login-btn admin-btn" onclick="showLoginForm('admin')">Login as Administrator</button>
        </div>

        <!-- Login Form -->
        <div class="login-form" id="studentLoginForm">
            <form>
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- <script>
        function showLoginForm(role) {
            var loginContainer = document.getElementById("loginContainer");
            var studentLoginForm = document.getElementById("studentLoginForm");

            // Hide all buttons and show the corresponding login form
            document.querySelectorAll('.login-btn').forEach(function(button) {
                button.style.display = 'none';
            });
            studentLoginForm.style.display = "block";

            // Perform additional actions based on the selected role if needed
            console.log("Login as " + role);
        }
    </script>
 -->
</body>
</html>
