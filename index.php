<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,user-scalable = no, initial scale = 1.0, maximum scale=1.0, minimum scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>
<body>
<form action=""  method="post">
    <br><label>Name</label></br>
    <br> <input type="text" name="name"></br>
    <br> <label>Password</label></br>
    <br> <input type="password" name="password"></br>
    <br> <label>Email</label></br>
    <br><input type="email" name="email"></br>
    <br><label>Birth Date</label></br>
    <br><input type="date" name="birth_date"></br>
    <br><label>Gender:</label></br>
    <br><label>Male</label></br>
    <input type="radio" name="gender" id="2" value="male">
    <br><label>Female</label></br>
    <input type="radio" name="gender" id="1" value="female"></br>
    <label>Favourite colour</label>
    <br><input type="color" name="colour"></br>
    <input type="submit">
</form>

<table border="1">
    <tr>
        <th><?php echo "Name"?></th>
        <th><?php echo $_POST['name'] ?></th>
    </tr>
    <tr>
        <th><?php echo "Password"?></th>
        <th><?php echo $_POST['password']?></th>
    </tr>
    <tr>
        <th><?php echo "Email"?></th>
        <th><?php echo $_POST['email']?></th>
    </tr>
    <tr>
        <th><?php echo "Birth Date"?></th>
        <th><?php echo $_POST['birth_date']?></th>
    </tr>
    <tr>
        <th><?php echo "Gender"?></th>
        <th><?php echo $_POST['gender']?></th>
    </tr>
    <tr>
        <th><?php echo "Favourite colour"?></th>
        <th><?php echo $_POST['colour']?></th>
    </tr>
</table>
</body>
</html>