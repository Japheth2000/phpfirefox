<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Form validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container_fluid">
    <form action="validation.php"method="post">

        <h2>Registration Form</h2>
        Names: <br><input type="text"name="names" placeholder=" enter your full names"><br>
        Email: <br><input type="text"name="email" placeholder="example@gmail.com"><br>
        Phone: <br><input type="text"name="phone" placeholder="07xxxxxxxx"><br>
        Gender: <br><input type="radio"name="gender"value="female">Female
        <input type="radio"name="gender" value="male">Male
        <input type="radio"name="gender"value="others">Others<br><br>
        <label for="dob">Date of Birth</label><br>
        <input type="date"id="dob"name="dob"><br>
        Subject: <br><input type="text"name="subject" placeholder="subject"><br>
        Message: <br><textarea name="message" id="message" cols="40" rows="10"></textarea><br>
        <input type="submit"name="submit"value="Submit"style="background-color: red">


    </form>
</div>


</body>
</html>





















