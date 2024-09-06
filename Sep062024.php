<?php include('functions.inc.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Feedback Form</h1>
    <form action="Sep062024.php" method="get">
        <div>
            <label for="fullName"><b>Enter Full Name</b></label>
            <input type="text" name="fullName" id="fullName">
        </div><br>
        <div>
            <label for="email"><b>Enter Email Address</b></label>
            <input type="text" name="email" id="email">
        </div><br>
        <div>
            <label for="gender"><b>Gender</b></label>
            <select name="gender" id="gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select>
        </div><br>
        <div>
            <label for="dob"><b>Date of Birth</b></label>
            <input type="date" name="dob" id="dob">
        </div><br>
        <div>
            <input type="submit" value="Send">
        </div>

    </form>

    <div>
        <h1>OutPut</h1>
        <div>
            <?php
                pr($_REQUEST);
                pr($_GET);
                pr($_POST);
            ?>
        </div>
    </div>
</body>
</html>