<?php

// GET values from home.php
$stud_id = $_GET['stud_id'];

$qry = "SELECT * FROM a_readers WHERE stud_id = '$stud_id'";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);

$soft_id = $row['soft_id'];
$fname = $row['fname'];
$lname = $row['lname'];
$fname = $row['fname'];
$father = $row['father'];
$grandpa = $row['grandpa'];
$birthdate = $row['birthdate'];
$birthplace = $row['birthplace'];
$wali_fname = $row['wali_fname'];
$wali_lname = $row['wali_lname'];
$kinship = $row['kinship'];
$job = $row['job'];
$cultural_level = $row['cultural_level'];
$establishment = $row['establishment'];
$address = $row['address'];
$engagement_date = $row['engagement_date'];
$last_edit = $row['last_edit'];
$phone = $row['phone'];
$wali_phone = $row['wali_phone'];
$notes = $row['notes'];
$sex = $row['sex'];