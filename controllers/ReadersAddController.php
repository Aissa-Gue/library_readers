<?php
//************* INSERT READER ********************//

// form input values 
if (isset($_POST['insert'])) {
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
    $engagement_date = $date;
    $phone = $_POST['phone'];
    $wali_phone = $_POST['wali_phone'];
    $notes = $_POST['notes'];
    $sex = $_POST['sex'];
    
    //insert into a_readers table
    $insertqry = "INSERT INTO `a_readers` VALUES ('$stud_id', '$soft_id', '$lname', '$fname', '$father', '$grandpa', '$birthdate', '$birthplace', '$wali_lname', '$wali_fname', '$kinship', '$job', '$cultural_level', '$establishment', '$address', '$engagement_date', '$engagement_date', '$phone', '$wali_phone', '$notes', '$sex')";

    if (mysqli_query($conn, $insertqry)) {
        if ($sex == 0) {
            echo "<script> alert('تم إضافة الطالبة: $lname $fname بنجاح') </script>";
        } else {
            echo "<script> alert('تم إضافة الطالب: $lname $fname بنجاح') </script>";
        }
        echo "<script> window.location.href= 'readersPreview.php?stud_id=$stud_id'</script>";
    } else {
        echo 'Error creating database: ' . mysqli_error($conn) . "\n";
        if ($sex == 0) {
            echo "<script> alert('حدثت مشكلة! لم يتم إضافة الطالبة: $lname $fname') </script>";
        } else {
            echo "<script> alert('حدثت مشكلة! لم يتم إضافة الطالب: $lname $fname') </script>";
        }
    }
}