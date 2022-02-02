<?php

// input values
$soft_id = '';
$fullname = '';
$sex = '';
$order = '';

if (isset($_POST['search']) or isset($_POST['prev_page']) or isset($_POST['next_page'])) {
    $soft_id = $_POST['soft_id'];
    $fullname = $_POST['fullname'];
    $sex = $_POST['sex'];
    $order =  $_POST['order_by'];
}
// Search query
$searchQry= "SELECT * FROM a_readers 
WHERE soft_id LIKE '%$soft_id' 
AND sex LIKE '%$sex'
AND (
    CONCAT(lname, ' ', fname) LIKE '%$fullname%' 
    OR 
    CONCAT(fname, ' ', lname) LIKE '%$fullname%'
)
$order";




$searchResult = mysqli_query($conn, $searchQry);
// search num rows
$search_num_rows = mysqli_num_rows($searchResult);

//************* Start pagination ********************//
$results_per_page = 15;
//determine the total number of pages available  
$number_of_page = ceil($search_num_rows / $results_per_page);

if (!isset($_POST['next_page'])) {
    $page = 1;
} else {
    $pageExplode = explode(' / ', $_POST['page']);
    $page = $pageExplode[0];
    if ($page < $number_of_page) $page++;
    $page_first_result = ($page - 1) * $results_per_page;
}
if (isset($_POST['prev_page'])) {
    $pageExplode = explode(' / ', $_POST['page']);
    $page = $pageExplode[0];
    if ($page > 1) $page--;
    $page_first_result = ($page - 1) * $results_per_page;
}
//determine the sql LIMIT starting number for the results on the displaying page  
$page_first_result = ($page - 1) * $results_per_page;

$setLimit = " LIMIT " . $page_first_result . "," . $results_per_page;
$searchQry = $searchQry . $setLimit;

$searchResult = mysqli_query($conn, $searchQry);
//************* END pagination ********************//


//************* DELETE READER ********************//
//initialize subscription
if (isset($_GET['delete/stud_id'])) {
    $stud_id = $_GET['delete/stud_id'];
    $lname = $_GET['lname'];
    $fname = $_GET['fname'];
    $sex = $_GET['sex'];

    $deleteQuery = "DELETE FROM a_readers WHERE stud_id = '$stud_id'";

    if (mysqli_query($conn, $deleteQuery)) {
        if ($sex == 0) {
            echo "<script> alert('تم حذف الطالبة $lname $fname بنجاح') </script>";
        } else {
            echo "<script> alert('تم حذف الطالب $lname $fname بنجاح') </script>";
        }
        echo "<script> window.location.href= 'readers.php'</script>";
    } else {
        if ($sex == 0) {
            echo "<script> alert('حدثت مشكلة: لم يتم حذف الطالبة!!') </script>";
        } else {
            echo "<script> alert('حدثت مشكلة: لم يتم حذف الطالب!!') </script>";
        }
        echo "<script> window.location.href= 'readers.php'</script>";
    }
}