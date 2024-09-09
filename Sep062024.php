<?php
include('functions.inc.php');
$name = $email = $gender = $dob = '';
$nameErr = $emailErr = $genderErr = $dobErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = test_input($_POST['fullName']);
    $email = test_input($_POST['email']);
    $gender = test_input($_POST['gender']);
    $dob = test_input($_POST['dob']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Feedback Form</h1>
    <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div>
            <label for="fullName" class="form-lable"><b>Enter Full Name</b></label>
            <input type="text" name="fullName" id="fullName" class="form-control" value="<?php echo $name;?>">
        </div><br>
        <div>
            <label for="email" class="form-lable"><b>Enter Email Address</b></label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $email;?>">
        </div><br>
        <div>
            <label for="gender" class="form-lable"><b>Gender</b></label>
            <select name="gender" id="gender" class="form-select">
                <option value=""<?php if("" == $gender){echo "selected";}?>>Select Gender</option>
                <option value="male"<?php if("male" == $gender){echo "selected";}?>>Male</option>
                <option value="female"<?php if("female" == $gender){echo "selected";}?>>Female</option>
                <option value="others"<?php if("others" == $gender){echo "selected";}?>>Others</option>
            </select>
        </div><br>
        <div>
            <label for="dob" class="form-label"><b>Date of Birth</b></label>
            <input type="date" name="dob" id="dob" class="form-control" value="<?php echo $dob;?>">
        </div><br>
        <div>
            <input type="submit" value="Send" name="submitBtn" class="btn btn-outline-success">
        </div>
        
    </form>
    </div>
    
    <div>
        <h1>OutPut</h1>
        <div>
            <ul>
                <li><b>Name :</b><?php echo $name;?></li>
                <li><b>Email :</b><?php echo $email;?></li>
                <li><b>Gender :</b><?php echo $gender;?></li>
                <li><b>Date of Birth :</b><?php echo $dob;?></li>
            </ul>

        </div>
    </div>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>