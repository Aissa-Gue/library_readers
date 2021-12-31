<?php
include "../check.php";
include "../controllers/ReadersPreviewController.php";
if ($sex == 0) {
    $subtitle = "معلومات المنخرطة";
} else {
    $subtitle = "معلومات المنخرط";
}
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

            <div class="col-11 offset-1 rounded p-3">

                <div class="row">
                    <div class="col-md-7">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center py-3  fs-5">المعلومات الشخصية</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="row py-1">
                                    <th class="col-md-3">رقم التسجيل:</th>
                                    <td class="col-md-9"><?php echo $stud_id ?></td>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-3">الرقم في البرنامج:</th>
                                    <td class="col-md-9"><?php echo $soft_id ?></td>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-3">الاسم الكامل: </th>
                                    <?php if($sex == 1){ ?>
                                    <td class="col-md-9"><?php echo $lname.' '.$fname.' بن '.$father.' بن '.$grandpa ?>
                                    </td>
                                    <?php }elseif($sex == 0){?>
                                    <td class="col-md-9"><?php echo $lname.' '.$fname.' بنت '.$father.' بن '.$grandpa ?>
                                    </td>
                                    <?php } ?>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-3">تاريخ الميلاد:</th>
                                    <td class="col-md-9"><?php echo $birthdate ?></td>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-3">مكان الميلاد:</th>
                                    <td class="col-md-9"><?php echo $birthplace ?></td>
                                </tr>

                                <tr class="row py-1">
                                    <th class="col-md-3">المهنة:</th>
                                    <td class="col-md-9"><?php echo $job ?></td>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-3">المستوى الثقافي:</th>
                                    <td class="col-md-9"><?php echo $cultural_level ?></td>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-3">مؤسسة الانتماء:</th>
                                    <td class="col-md-9"><?php echo $establishment ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-5">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center py-3 fs-5">التفاصيل</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="row py-1">
                                    <th class="col-md-4">العنوان:</th>
                                    <td class="col-md-8"><?php echo $address ?></td>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-4">رقم الهاتف:</th>
                                    <td class="col-md-8"><?php echo $phone ?></td>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-4">لقب واسم الولي:</th>
                                    <td class="col-md-8"><?php echo $wali_lname.' '.$wali_fname.' [ '.$kinship.' ]' ?>
                                    </td>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-4">رقم هاتف الولي:</th>
                                    <td class="col-md-8"><?php echo $wali_phone ?></td>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-4">ملاحظات:</th>
                                    <td class="col-md-8"><?php echo $notes ?></td>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-4">تاريخ الانخراط:</th>
                                    <td class="col-md-8"><?php echo $engagement_date ?></td>
                                </tr>
                                <tr class="row py-1">
                                    <th class="col-md-4">تاريخ آخر تعديل:</th>
                                    <td class="col-md-8"><?php echo $last_edit ?></td>
                                </tr>
                                <tr class="row mt-4">
                                    <td class="col-md-12 text-center">

                                        <a href="printReport.php?soft_id=<?php echo $soft_id ?>"
                                           class="btn btn-secondary px-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-detailed-fill" viewBox="0 0 16 16">
                                                <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5Zm4 1a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5Zm0 5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5ZM4 8a1 1 0 0 0 1 1h6a1 1 0 1 0 0-2H5a1 1 0 0 0-1 1Z"/>
                                            </svg>
                                            التقرير
                                        </a>

                                        <a href="readersCard.php?stud_id=<?php echo $stud_id ?>"
                                           class="btn btn-success px-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                                <path
                                                        d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                                <path
                                                        d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                            </svg>
                                            البطاقة
                                        </a>

                                        <a href="readersEdit.php?stud_id=<?php echo $stud_id ?>"
                                            class="btn btn-primary px-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                            تعديل
                                        </a>

                                        <a href="readers.php?delete/stud_id=<?php echo $row['stud_id'].'&lname='.$row['lname'].'&fname='.$row['fname'].'&sex='.$row['sex'] ?>"
                                            class="btn btn-danger px-3" onclick="return confirm('هل أنت متأكد؟')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                            حذف
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../requirements2.php"; ?>

</body>

</html>