<?php
include "../check.php";
include "../controllers/ReportController.php";
$subtitle = "تقرير حضور الطالبة: ";
$subtitle = $subtitle.'<span class="h5">'.$fu.'</span>';

//disable validation of form by the browser
header('Cache-Control: no cache');

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include "../requirements1.php"; ?>
</head>

<body>
    <div class="container-fluid background_img">
        <div class="row">
            <?php include "../views/components/navbar.php" ?>
        </div>

        <div class="row justify-content-center">
            <div class="col-1 fixed-top">
                <?php include "../views/components/sidebar.php" ?>
            </div>

            <div class="col-11 p-3 offset-1 rounded">
                <div class="row container-fluid justify-content-sm-centerr my-3">
                    <div class="col-sm-7 offset-3">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <span class="input-group-text fw-bold">من تاريخ</span>
                                <input type="date" class="form-control" name="start_date"
                                    value="<?php echo $start_date ?>">

                                <span class="input-group-text fw-bold">إلى تاريخ</span>
                                <input type="date" class="form-control" name="end_date" value="<?php echo $end_date ?>">
                                <input class="btn btn-primary" type="submit" name="submitP" value="بحث">
                            </div>
                        </form>
                    </div>

                    <div class="col-sm-2 text-end">
                        <a class="btn btn-dark rounded"
                            href="printReportFile.php?soft_id=<?php echo $soft_id ?>&start_date=<?php echo $start_date ?>&end_date=<?php echo $end_date ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-printer-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                <path
                                    d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                            </svg>
                            طباعة
                        </a>
                    </div>
                </div>
                <!-- END serch new -->

                <!-- body table -->
                <div class="container-fluid">
                    <!-- Alert -->
                    <div class="alert alert-warning text-center" role="alert">
                        <strong> عدد النتائج = </strong>
                        <?php if(empty($search_num_rows)) echo 0;
                            else echo $search_num_rows 
                        ?>
                    </div>
                    <!-- END Alert -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">التاريخ</th>
                                <th scope="col" class="text-center">وقت الدخول</th>
                                <th scope="col" class="text-center">وقت الخروج</th>
                                <th scope="col" class="text-center">المدة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (isset($_POST['submitP'])) {
                        foreach ($rows as $record) {
                            $id = $record['id'];
                            $date = $record['c_date'];
                            $en_time = $record['enter_time'];
                            $ex_time = $record['exit_time'];
                            $duration = $record['duration'];
                        ?>
                            <tr>
                                <th scope="row" class="text-center"><?php echo $date ?></th>
                                <td class="text-center"><?php echo $en_time ?></td>
                                <td class="text-center"><?php echo $ex_time ?></td>
                                <td class="text-center text-danger fw-bold"><?php echo $duration ?></td>
                            </tr>
                            <?php }}else{?>
                            <tr>
                                <th class="td text-center" colspan="4">لا توجد نتائج</th>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <?php include "../requirements2.php"; ?>

</body>


</html>