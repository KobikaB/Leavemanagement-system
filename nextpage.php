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
            max-width: 500px;
            max-height: 500px;
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
            flex-direction: column;
            align-items: flex-start;
        }

        .button {
            display: inline-block;
            padding: 15px 0;
            width: 200px;
            margin-bottom: 10px;
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        #homeBtn {
            width: 150px;
        }

        #logout {
            margin-left: auto; /* Move the element to the right */
        }
    </style>
</head>

<body>
    <div id="header">
        <img class="corner-image" src="Logo.png" alt="Corner Image">

        <div id="logout">
            <a href="#" class="button">Logout</a>
        </div>
    </div>

    <div id="container1">
        <div class="button-container">
            <a href="#" id="homeBtn" class="button">Home</a>
        </div>
    </div>
    <div id="container">
        <div class="button-container">
            <a href="#" class="button">Statics</a>
            <a href="#" id="applyLeaveBtn" class="button">Apply for Leave</a>
            <a href="#" class="button">Clarification for Leave</a>
        </div>
    </div>

    <?php
    // Add PHP code for handling form submissions or other backend logic
    ?>
</body>

</html>
