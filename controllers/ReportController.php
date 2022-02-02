<?php
//get daily report
$query = "SELECT a_readers.soft_id, a_readers.lname, a_readers.fname, a_readers.father, a_readers.birthdate, b_report.id, b_report.c_date, b_report.enter_time, b_report.exit_time FROM a_readers, b_report WHERE a_readers.soft_id = b_report.soft_id and b_report.c_date = current_date() ORDER BY `enter_time` ASC, `id` ASC";
$result = mysqli_query($conn, $query);

/*** Get the name of student ***/
$fu = "";
if (isset($_POST['enter']) || isset($_POST['exit'])) {
    $soft_id = $_POST['student_nbr'];
    $query = "SELECT lname, fname, father, sex FROM a_readers WHERE soft_id= '$soft_id'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    global $fu;
    $fu = $row['lname'] . ' ' . $row['fname'] . ' بنت ' . $row['father'];
}

/*** insert into b_report (enter) ***/
if (isset($_POST['enter'])) {
    $soft_id = $_POST['student_nbr'];
    $da = $date;
    $en = date("H:i");

    $sql = "INSERT INTO b_report values ('0','$soft_id','$da','$en', null)";
    if ($row['sex'] == 0 and mysqli_query($conn, $sql)) {
        echo "<script> alert('تم تسجيل دخول الطالبة: $fu بنجاح') </script>";
        echo '<script>window.location.href = "../index.php"</script>';
    } else {
        echo "<script> alert('فشلت عملية تسجيل الدخول') </script>";
        echo mysqli_error($conn);
        //echo '<script>window.location.href = "../index.php"</script>';
    }

}

/*** insert into b_report (exit) ***/
if (isset($_POST['exit'])) {
    $soft_id = $_POST['student_nbr'];
    $da = $date;
    $ex = date("H:i");

    //test if id not exist or not entred yet
    $test = "SELECT * from b_report WHERE soft_id='$soft_id' and exit_time IS NULL LIMIT 1";
    $testQuery = mysqli_query($conn, $test);

    // set exit time
    $sql = "UPDATE b_report SET exit_time='$ex' WHERE c_date='$da' and soft_id='$soft_id' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($conn, $sql);

    if (mysqli_num_rows($testQuery) > 0 and mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('تم تسجيل خروج الطالبة: $fu بنجاح') </script>";
        echo '<script>window.location.href = "../index.php"</script>';
    } else {
        echo "<script> alert('فشلت عملية تسجيل الخروج') </script>";
        echo mysqli_error($conn);
        //echo '<script>window.location.href = "../index.php"</script>';
    }
}

/*** Delete presence row from log table / index.php ***/
if (isset($_GET['log'])) {
    $id = $_GET['log'];
    $sql = "DELETE from b_report WHERE id= '$id'";
    if (mysqli_query($conn, $sql)) {
        echo '<script>window.location.href = "../index.php"</script>';
    } else {
        echo "<script> alert('فشلت عملية الحذف !') </script>";
    }
}


/*** Single Student Report ***/
if (isset($_GET['soft_id'])) {
    $soft_id = $_GET['soft_id'];

    $studentReportQry = "SELECT * FROM a_readers where soft_id = '$soft_id'";
    $studentReportResult = mysqli_query($conn, $studentReportQry);
    $row = mysqli_fetch_array($studentReportResult);

    $fu = $row['lname'] . ' ' . $row['fname'] . ' بنت ' . $row['father'];
    $bi = $row['birthdate'];
    $es = $row['establishment'];
    $ed = $row['cultural_level'];

//print report file if start_date and end-date exist
    if(isset($_GET['start_date']) and isset($_GET['end_date'])){
        $start_date = $_GET['start_date'];
        $end_date = $_GET['end_date'];

        $sql = "SELECT id, c_date, enter_time, exit_time, timediff(exit_time,enter_time) as duration
        FROM b_report 
        WHERE soft_id= '$soft_id' 
        AND c_date between '$start_date' and '$end_date'";
        $rec = mysqli_query($conn, $sql);
        $rows2 = mysqli_fetch_all($rec, MYSQLI_ASSOC);
    }
}

if (isset($_POST['submitP'])) {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = "SELECT id, c_date, enter_time, exit_time, timediff(exit_time,enter_time) as duration
    FROM b_report 
    WHERE soft_id= '$soft_id' 
    AND c_date between '$start_date' and '$end_date'";
    $rec = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_all($rec, MYSQLI_ASSOC);
    $search_num_rows = mysqli_num_rows($rec);
}