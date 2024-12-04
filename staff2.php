<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Management System</title>
     <?php
        require_once'configuration.php';
        require_once'function.php';
    ?>
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
        #attenBtn,
        #backBtn {
            background-color: #3498db; /* Set background color to the same color as Logout button */
            color: #fff; /* Set text color to white */
        }

        #homeBtn {
            font-weight: bold; /* Make Home button bold */
        }

        #appBtn,
        #staff1Btn,
        #staff2Btn,
        #student1Btn,
        #student2Btn {
            background-color: transparent;
            color: #333;
        }

        #attendanceText {
            margin-top: 10px; /* Adjust margin as needed */
            font-weight: bold;
            color: #333; /* Set text color to black */
        }

        #logoText {
            margin-left: 10px; /* Adjust the margin as needed */
            font-size: 20px; /* Adjust the font size as needed */
            color: red; /* Adjust the text color as needed */
            padding-left: 100px;
        }

        .list-container {
            margin-top: 20px;
        }

        .list-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            align-items: center;
        }

        .history-button {
            margin-left: 20px; /* Adjust the margin as needed */
        }
        
         #formContainer {
            margin: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }
        .back-button {
            margin-left: 20px; /* Adjust the margin as needed */
        }
    </style>
</head>

<body>
    <div id="header">
        <img class="corner-image" src="Logo1.jpg" alt="Corner Image">
        <p id="logoText">Leave Management System University of Vavuniya</p>

        <div class="button-container">
            <a href="home_admin.php" class="button" id="backBtn">Back</a>
            <div id="logout">
                <a href="index.php" class="button" id="logout">Logout</a>
            </div>
        </div>
    </div>

    <div id="container1">
        <p id="attendanceText">Home / Applicant Information</p>
        <div class="list-container">
            <div class="list-item">
                <span>Staff 2</span>
                <a href="#" class="history-button button">History</a>
            </div>
           
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
        
        <div class="button-container">
    <button class="button" style="background-color: #3498db; color: #fff;" id="acceptBtn">Accept</button>
    <button class="button" style="background-color: #3498db; color: #fff;" id="rejectBtn">Reject</button>
</div>

    </div>
    <!-- ... (existing code) ... -->



<!-- Add Accept and Reject buttons -->

<?php
// Add PHP code for handling form submissions or other backend logic
?>

</body>

</html>

    <?php
    // Add PHP code for handling form submissions or other backend logic
    ?>
</body>

</html>