<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url('Lvm.png') no-repeat center center fixed; 
            /* Replace 'your-background-image.jpg' with the actual URL or path to your background image */
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
            margin-bottom: 5px;
        }

        .login-btn {
            flex: 1;
            margin-right: 10px; /* Adjust the margin for space between buttons */
            border: none;
            border-radius: 4px;
            font-size: 24px;
            color: #fff;
            cursor: pointer;
        }

        .student-btn {
            background-color: #3498db;
        }

        .staff-btn {
            background-color: #3498db;
        }

        .admin-btn {
            background-color: #3498db;
        }
        .corner-image {
            position: absolute; /* Set absolute positioning */
            top: 0; /* Position at the top */
            left: 0; /* Position at the left */
            max-width: 500px; /* Set a maximum width for the image */
            max-height: 500px; /* Set a maximum height for the image */
        }
    </style>
    <title>Login Form</title>
</head>
<body>

    <div class="login-container">
        <img class="corner-image" src="Logo.png" alt="Corner Image">
        <div class="login-btn-container">
            <button class="login-btn student-btn">Login as a Student</button>
            <button class="login-btn staff-btn">Login as a Staff</button>
            <button class="login-btn admin-btn">Login as Administrator</button>
        </div>
    </div>

</body>
</html>
