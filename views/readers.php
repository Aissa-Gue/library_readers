<?php
include "../check.php";
include "../controllers/ReadersController.php";
$subtitle = "قائمة المنخرطين";
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
                    <div class="col-sm-10">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="input-group mb-3 mt-4">
                                <span class="input-group-text">ترتيب حسب</span>
                                <select class="form-select" name="order_by">
                                    <option value="ORDER BY `lname`, 'fname' ASC" selected> الإسم</option>
                                    <option value="ORDER BY `soft_id` ASC"> رقم المنخرط </option>
                                    <option value="">رقم التسجيل</option>
                                </select>
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" placeholder="رقم المنخرط" name="soft_id"
                                    value="<?php echo $soft_id ?>">

                                <span class="input-group-text">#</span>
                                <input type="text" class="form-control" placeholder="الاسم الكامل" name="fullname"
                                    value="<?php echo $fullname ?>" style="width: 8%">

                                <span class="input-group-text">الجنس</span>
                                <select class="form-select" name="sex">
                                    <option value="" selected>الكل</option>
                                    <option value="1">ذكر</option>
                                    <option value="0">أنثى</option>
                                </select>

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
                                <th scope="col" class="text-center">رقم المنخرط</th>
                                <th scope="col" class="text-center">رقم التسجيل</th>
                                <th scope="col" class="">الاسم الكامل</th>
                                <th scope="col" class="text-center">تاريخ الميلاد</th>
                                <th scope="col" class="text-center">معاينة</th>
                                <?php if($_SESSION['id'] != 3){?>
                                <th scope="col" class="text-center">تعديل</th>
                                <th scope="col" class="text-center">حذف</th>
                                <?php }  ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    while ($row = mysqli_fetch_array($searchResult)) {
                        ?>
                            <tr>
                                <th scope="row" class="text-center"><?php echo $row['soft_id'] ?></th>
                                <td class="text-center"><?php echo $row['stud_id'] ?></td>
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

                                <?php if($_SESSION['id'] != 3){?>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary"
                                        href="ReadersEdit.php?stud_id=<?php echo $row['stud_id'] ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-outline-danger"
                                        href="?delete/stud_id=<?php echo $row['stud_id'] . '&lname=' . $row['lname'] . '&fname=' . $row['fname'] . '&sex=' . $row['sex'] ?>"
                                        onclick="return confirm('هل أنت متأكد؟')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                        </svg>
                                    </a>
                                </td>
                                <?php } ?>
                            </tr>
                            <?php } ?>
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