<?php require '../controller/controller_reg.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="stylescss.css">
</head>
<body>

  <h1 style="color:red; font-size:400%;" align=center style="color:red;">Registration Form</h1><br>

<form align=center method="POST" action="../controller/controller_reg.php">

  <label style="color:blue; font-size:150%;" for="FirstName">First name:</label><br>
  <input type="text" id="FirstName" name="FirstName" placeholder="Enter First Name" required/><br><br>

  <label style="color:blue; font-size:150%;" for="LastName">Last Name:</label><br>
  <input type="text" id="LastName" name="LastName" placeholder="Enter Last Name" required/><br><br>

  <label style="color:blue; font-size:150%;" for="Password">Password:</label><br>
  <input type="text" id="Password" name="Password" placeholder="Enter Password" required/><br><br><br>

  <input type="submit" value="Submit" name="submit" id="submit">
</form>

</body>

</html>
