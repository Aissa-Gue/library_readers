<?php
include "../check.php";
include "../controllers/ReadersEditController.php";
if ($sex == 0) {
    $subtitle = "تعديل معلومات المنخرطة";
} else {
    $subtitle = "تعديل معلومات المنخرط";
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

            <div class="col-11 offset-1 p-3 rounded">

                <form action="" method="post" enctype="multipart/form-data">
                    <!-- 1st row -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="stud_id" class="form-label">رقم التسجيل</label>
                            <input type="number" class="form-control text-center" id="stud_id" name="stud_id"
                                value="<?php echo $stud_id ?>" required>
                            <input type="number" class="form-control text-center" name="prev_id"
                                value="<?php echo $stud_id ?>" hidden>

                        </div>
                        <div class="col-md-3">
                            <label for="soft_id" class="form-label">الرقم في البرنامج</label>
                            <input type="number" class="form-control text-center" id="soft_id" name="soft_id"
                                value="<?php echo $soft_id ?>" required>
                        </div>
                    </div>
                    <!-- 2nd row -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="lname" class="form-label">اللقب</label>
                            <input type="text" class="form-control" id="lname" name="lname"
                                value="<?php echo $lname; ?>" required>
                        </div>
                        <div class="col-md-3">
                            <label for="fname" class="form-label">الإسم</label>
                            <input type="text" class="form-control" id="fname" name="fname"
                                value="<?php echo $fname; ?>" required>
                        </div>
                        <div class="col-md-3">
                            <label for="father" class="form-label">اسم الأب</label>
                            <input type="text" class="form-control" id="father" name="father"
                                value="<?php echo $father ?>" required>
                        </div>
                        <div class="col-md-3">
                            <label for="grandpa" class="form-label">اسم الجد</label>
                            <input type="text" class="form-control" id="grandpa" name="grandpa"
                                value="<?php echo $grandpa ?>" required>
                        </div>
                    </div>
                    <!-- 3rd row -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="birthdate" class="form-label">تاريخ الميلاد</label>
                            <input type="text" class="form-control text-center" id="birthdate" name="birthdate"
                                value="<?php echo $birthdate ?>" required>
                        </div>
                        <div class="col-md-3">
                            <label for="birthplace" class="form-label">مكان الميلاد</label>
                            <input type="text" class="form-control" id="birthplace" name="birthplace"
                                value="<?php echo $birthplace ?>">
                        </div>
                        <div class="col-md-2">
                            <label for="wali_lname" class="form-label">لقب الولي</label>
                            <input type="text" class="form-control" id="wali_lname" name="wali_lname"
                                value="<?php echo $wali_lname ?>">
                        </div>
                        <div class="col-md-2">
                            <label for="wali_fname" class="form-label">اسم الولي</label>
                            <input type="text" class="form-control" id="wali_fname" name="wali_fname"
                                value="<?php echo $wali_fname ?>">
                        </div>
                        <div class="col-md-2">
                            <label for="kinship" class="form-label">نوع القرابة</label>
                            <input type="text" class="form-control" id="kinship" name="kinship"
                                value="<?php echo $kinship ?>">
                        </div>
                    </div>
                    <!-- 4th row -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="job" class="form-label">المهنة</label>
                            <input type="text" class="form-control" id="job" name="job" value="<?php echo $job ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="cultural_level" class="form-label"> المستوى الثقافي</label>
                            <input type="text" class="form-control" id="cultural_level" name="cultural_level"
                                value="<?php echo $cultural_level ?>">
                        </div>
                        <div class="col-md-5">
                            <label for="establishment" class="form-label">مؤسسة الانتماء</label>
                            <input type="text" class="form-control" id="establishment"
                                value="<?php echo $establishment ?>" name="establishment">
                        </div>
                    </div>
                    <!-- 5th row -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="phone" class="form-label">رقم الهاتف</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                value="<?php echo $phone ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="wali_phone" class="form-label">رقم هاتف الولي</label>
                            <input type="text" class="form-control" id="wali_phone" name="wali_phone"
                                value="<?php echo $wali_phone ?>">
                        </div>
                        <div class="col-md-5">
                            <label for="address" class="form-label">العنوان</label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="<?php echo $address; ?>">
                        </div>

                    </div>
                    <!-- 6th row -->
                    <div class="row">
                        <div class="col-md-7">
                            <label for="notes" class="form-label">ملاحظات</label>
                            <textarea type="text" class="form-control" id="notes" name="notes"
                                style="height: 90px"><?php echo $notes ?></textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-lg  mt-5 p-3" style="width: 120px"
                                name="update">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                                تعديل
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "../requirements2.php"; ?>

</body>

</html>