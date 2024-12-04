<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        #header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 10px; /* Increased top padding */
            position: relative;
            background-color: #f5f5f5;
        }

        .corner-image {
            position: absolute;
            top: 0;
            left: 0;
            max-width: 100px; /* Set a specific width for the logo */
            max-height: 100px; /* Set a specific height for the logo */
            background-color: transparent;
        }

        #container {
            margin: 20px;
            margin-top: 40px; /* Increased top margin */
            justify-content: space-between;
            margin-bottom: 10px;
        }

        #container1 {
            margin: 20px;
            margin-top: 45px; /* Increased top margin */
            justify-content: space-between;
        }

        .button-container {
            display: flex;
            flex-direction: row; /* Align buttons horizontally */
            align-items: center;
        }

        .button {
            display: inline-block;
            padding: 15px 10px; /* Adjust padding as needed */
            margin: 0 10px; /* Adjust margin as needed */
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            color: #333; /* Set text color to black */
        }

        #homeBtn,
        #logout,
        #statisticBtn {
            background-color: transparent; /* Set background color to transparent */
        }

        #homeBtn {
            font-weight: bold; /* Make Home button bold */
        }

        #logout,
        #statisticBtn {
            border-radius: 5px; /* Set border-radius */
        }

        #logout {
            background-color: #3498db;
            color: #fff; /* Set text color to white */
            margin-left: auto;
        }

        #clariBtn {
            background-color: transparent;
            color: #333;
        }

        #logoText {
            margin-left: 10px; /* Adjust the margin as needed */
            font-size: 20px; /* Adjust the font size as needed */
            color: red; /* Adjust the text color as needed */
            padding-left: 100px;
        }

        
        #formContainer {
            margin: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            margin-top: 5px;
        }

        #submitBtn {
            background-color: #4caf50;
            color: #fff;
        }
    </style>
</head>

<body>
    <div id="header">
        <img class="corner-image" src="Logo1.jpg" alt="Corner Image">
        <p id="logoText">Leave Management System University of Vavuniya</p>

        <div id="logout">
            <a href="#" class="button" id="logout">Logout</a>
        </div>
    </div>

    <div id="container1">
        <div class="button-container">
            <a href="#" id="homeBtn" class="button">Home</a>
            <span>/</span>
            <a href="#" id="clariBtn" class="button">Clarification for Leave</a>
        </div>
    </div>
   

    <div id="formContainer">
        <div class="form-group">
            <label for="reason">Reason:</label>
            <input type="text" id="reason" name="reason">
        </div>

        <div class="form-group">
            <label for="period">Date:</label>
            <input type="text" id="period" name="period">
        </div>

        <div class="form-group">
            <label for="file">Medical Document / Others:</label>
            <input type="file" id="file" name="file">
        </div>

        <button class="button" id="submitBtn">Submit</button>
    </div>

    <?php
    // Add PHP code for handling form submissions or other backend logic
    ?>
</body>

</html>
