<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// define variables and set to empty values
$namesErr=$emailErr=$phoneErr=$genderErr=$dateofbirthErr=$subjectErr=$messageErr="";
$names=$email=$phone=$gender=$dateofbirth=$subject=$message="";

if ($_SERVER["REQUEST_METHOD"] =="POST") {
    if (empty($_POST["names"])) {
        $namesErr = "Name is required";
    } else {
        $names = test_input($_POST["names"]);
        // check if name only contains letters and whitespace
        if ( !preg_match("/^[a-zA-Z-']*$/", $names)) {
            $namesErr= "letters and white space required only";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if email is well formed
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email address";
        }

    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
        // check for number
        if (!preg_match("/0-9/",$phone)) {
            $phoneErr = "numbers are required only";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["dob"])) {
        $dateofbirthErr = "Date Of Birth is required";
    } else {
        $dateofbirth = test_input($_POST["dob"]);
    }

    if (empty($_POST["subject"])) {
        $subjectErr = "Subject is required";
    } else {
        $subject = test_input($_POST["subject"]);
    }

    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<h2>Registration Form</h2>

<form method="post" action="" <?php
echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Names: <br><input type="text"name="names" placeholder=" Enter Your Full Names">
            <span class="error"style="color: red">* <?php echo $namesErr;?></span><br>

    Email: <br><input type="text"name="email" placeholder="example@gmail.com">
            <span class="error"style="color: red">* <?php echo $emailErr;?></span><br>

    Phone: <br><input type="text"name="phone" placeholder="Enter Your Phone Number">
           <span class="error"style="color: red">* <?php echo $phoneErr;?></span><br>

    Gender: <br><input type="radio"name="gender"value="female">Female
    <input type="radio"name="gender" value="male">Male
    <input type="radio"name="gender"value="others">Others
    <span class="error"style="color: red">* <?php echo $genderErr;?></span><br>

    <label for="dob">Date of Birth</label><br>
    <input type="date"id="dob"name="dob">
    <span class="error"style="color: red">* <?php echo $dateofbirthErr;?></span><br>

    Subject: <br><input type="text"name="subject" placeholder="subject">
             <span class="error"style="color: red">* <?php echo $subjectErr;?></span><br>

    Message: <br><textarea name="message" id="message" cols="40" rows="10"></textarea>
             <span class="error"style="color: red">* <?php echo $messageErr;?></span><br>

    <input type="submit"name="submit"value="Submit">

</form>

<?php
//echo "<h2>Your Input:</h2>>";
//echo $names;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $phone;
//echo "<br>";
//echo $gender;
//echo "<br>";
//echo $subject;
//echo "<br>";
//echo $message;
//
//?>

</body>
</html>
