<?php

// GET values from home.php
if (isset($_GET['stud_id'])) {
    $stud_id = $_GET['stud_id'];

    $qry = "SELECT * FROM a_readers WHERE stud_id = $stud_id";
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
    $phone = $row['phone'];
    $wali_phone = $row['wali_phone'];
    $notes = $row['notes'];
    $sex = $row['sex'];

}
// form input values
if (isset($_POST['update'])) {
    $prev_id = $_POST['prev_id'];
    $stud_id = $_POST['stud_id'];
    $soft_id = $_POST['soft_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $father = $_POST['father'];
    $grandpa = $_POST['grandpa'];
    $birthdate = $_POST['birthdate'];
    $birthplace = $_POST['birthplace'];
    $wali_fname = $_POST['wali_fname'];
    $wali_lname = $_POST['wali_lname'];
    $kinship = $_POST['kinship'];
    $job = $_POST['job'];
    $cultural_level = $_POST['cultural_level'];
    $establishment = $_POST['establishment'];
    $address = $_POST['address'];
    $last_edit = $date;
    $phone = $_POST['phone'];
    $wali_phone = $_POST['wali_phone'];
    $notes = $_POST['notes'];

    //Update student information
    $updateqry = "UPDATE `a_readers` SET stud_id = '$stud_id', soft_id = '$soft_id', lname= '$lname', fname= '$fname',father= '$father', grandpa= '$grandpa',birthdate= '$birthdate', birthplace= '$birthplace', wali_lname= '$wali_lname', wali_fname= '$wali_fname', kinship= '$kinship', job= '$job', cultural_level= '$cultural_level', establishment= '$establishment', address= '$address', last_edit = '$last_edit', phone= '$phone', wali_phone= '$wali_phone', notes= '$notes' WHERE stud_id= '$prev_id'";

    if (mysqli_query($conn, $updateqry) and mysqli_affected_rows($conn) > 0) {
        if ($sex == 0) {
            echo "<script> 
        alert('تم تعديل معلومات الطالبة: $lname $fname بنجاح');
        </script>";
        } else {
            echo "<script> 
        alert('تم تعديل معلومات الطالب: $lname $fname بنجاح');
        </script>";
        }
        echo "<script> window.location.href= 'readersPreview.php?stud_id=$stud_id'</script>";
    } else {
        if ($sex == 0) {
            echo "<script> alert('حدثت مشكلة! لم يتم تعديل معلومات الطالبة: $lname $fname') </script>";
        } else {
            echo "<script> alert('حدثت مشكلة! لم يتم تعديل معلومات الطالب: $lname $fname') </script>";
        }
    }
}