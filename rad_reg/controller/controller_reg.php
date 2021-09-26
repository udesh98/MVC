<?php

require'../model/model_reg.php';
if(isset($_POST['submit']))
{
    // $id=$_POST['id'];
    $fname=$_POST['FirstName'];
    $lname=$_POST['LastName'];
    $password=$_POST['Password'];
 $sql = 'INSERT INTO users1 '.
 '(FirstName,LastName,Password) '.
 'VALUES ("'.$fname.'","'.$lname.'","'.$password.'")';

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
