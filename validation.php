<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
</head>
<body>
Hello there, My names is <?php echo $_POST ["names"];?><br>
You can reach me through <?php echo $_POST ["email"];?>
and also through my phone number <?php echo $_POST ["phone"];?><br>
I am a <?php echo $_POST["gender"];?> and was born in <?php echo $_POST ["dob"];?><br>
The subject for the registration form is <?php echo $_POST ["subject"];?><br>
Message is <?php echo $_POST ["message"];?><br>

</body>
</html>
