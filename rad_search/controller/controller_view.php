<?php
// (A) DATABASE CONNECTION
require "../model/model_view.php";
$DB = new DB();

// (B) SEARCH FOR USERS
$results = $DB->select(
  "SELECT * FROM `users` WHERE `name` LIKE ?",
  ["%{$_POST['search']}%"]
);

// (C) OUTPUT RESULTS
echo json_encode(count($results)==0 ? null : $results);
