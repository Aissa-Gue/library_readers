<?php

// input values
$from_date = '2020-01-01';
$to_date = $date;

if (isset($_POST['search']) or isset($_POST['prev_page']) or isset($_POST['next_page'])) {
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
}
// Search query
$searchQry= "SELECT *, count(*) over (partition by b_report.soft_id) as total
FROM a_readers, b_report
WHERE a_readers.soft_id = b_report.soft_id
and c_date >= '$from_date' 
and c_date <= '$to_date'
ORDER BY c_date DESC";




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