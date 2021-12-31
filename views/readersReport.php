<?php
include "../check.php";
include "../controllers/ReadersReportController.php";
$subtitle = "تقرير الحضور";
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
                <div class="row container-fluid justify-content-sm-center">
                    <div class="col-sm-7">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="input-group mb-3 mt-4">
                                <span class="input-group-text">من يوم</span>
                                <input type="date" class="form-control" name="from_date"
                                    value="<?php echo $from_date ?>">

                                <span class="input-group-text">إلى يوم</span>
                                <input type="date" class="form-control text-center" name="to_date"
                                    value="<?php echo $to_date ?>">

                                <input class="btn btn-primary" type="submit" name="search" value="بحث">
                            </div>
                            <!--</form>-->
                    </div>
                </div>
                <!-- END serch new -->

                <!-- body table -->
                <div class="container-fluid">
                    <!-- Alert -->
                    <div class="alert alert-warning text-center" role="alert">
                        <strong> عدد النتائج = </strong>
                        <?php echo $search_num_rows ?>
                    </div>
                    <!-- END Alert -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">رقم التسجيل</th>
                                <th scope="col" class="">الاسم الكامل</th>
                                <th scope="col" class="text-center">تاريخ الميلاد</th>
                                <th scope="col" class="text-center">تاريخ الحضور</th>
                                <th scope="col" class="text-center">وقت الدخول</th>
                                <th scope="col" class="text-center">وقت الخروج</th>
                                <th scope="col" class="text-center">مجموع الزيارات</th>
                                <th scope="col" class="text-center">معاينة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    while ($row = mysqli_fetch_array($searchResult)) {
                    ?>
                            <tr>
                                <th scope="row" class="text-center"><?php echo $row['stud_id'] ?></th>
                                <?php if ($row['sex'] == 0) { ?>
                                <td class="">
                                    <?php echo
                                    $row['lname'] . '&nbsp;' . $row['fname'] . ' بنت ' . $row['father'] . ' بن ' . $row['grandpa'] ?>
                                </td>
                                <?php } else { ?>
                                <td class="">
                                    <?php echo
                                    $row['lname'] . '&nbsp;' . $row['fname'] . ' بن ' . $row['father'] . ' بن ' . $row['grandpa'] ?>
                                </td>
                                <?php } ?>

                                <td class="text-center"><?php echo $row['birthdate'] ?></td>

                                <td class="text-center"><?php echo $row['c_date'] ?></td>
                                <td class="text-center"><?php echo $row['enter_time'] ?></td>
                                <td class="text-center"><?php echo $row['exit_time'] ?></td>
                                <td class="text-center text-primary fw-bold"><?php echo $row['total'] ?>
                                </td>

                                <td class="text-center">
                                    <a class="btn btn-outline-success"
                                        href="ReadersPreview.php?stud_id=<?php echo $row['stud_id'] ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <?php }
                    ?>
                        </tbody>
                    </table>

                    <!-- START pagination -->
                    <!-- <form action="" method="post" id="prev_pageForm">-->
                    <nav class="pb-2">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <button type="submit" name="prev_page" class="btn btn-primary">الصفحة السابقة</button>
                            </li>
                            <li class="page-item">
                                <input type="text" name="page" class="page-link text-center bg-light text-primary"
                                    aria-disabled="true" value="<?php echo $page . ' / ' . $number_of_page ?>" readonly>
                            </li>
                            <li class="page-item">
                                <button type="submit" name="next_page" class="btn btn-primary">الصفحة التالية</button>
                            </li>
                        </ul>
                    </nav>
                    <!-- END pagination -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "../requirements2.php"; ?>

</body>


</html>