<?php
include "../check.php";
include "../controllers/ReadersAddController.php";
$subtitle = "إضافة منخرط جديد";

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

                <form action="" method="post" enctype="multipart/form-data">
                    <!-- 1st row -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="stud_id" class="form-label">رقم التسجيل</label>
                            <input type="number" class="form-control text-center" placeholder="أدخل رقم التسجيل"
                                id="stud_id" name="stud_id" required>
                        </div>
                        <div class="col-md-3">
                            <label for="soft_id" class="form-label">الرقم في البرنامج</label>
                            <input type="number" class="form-control text-center" placeholder="أدخل الرقم في البرنامج"
                                id="soft_id" name="soft_id" required>
                        </div>
                    </div>
                    <!-- 2nd row -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="lname" class="form-label">اللقب</label>
                            <input type="text" class="form-control" placeholder="أدخل اللقب" id="lname" name="lname"
                                required>
                        </div>
                        <div class="col-md-3">
                            <label for="fname" class="form-label">الإسم</label>
                            <input type="text" class="form-control" placeholder="أدخل الاسم" id="fname" name="fname"
                                required>
                        </div>
                        <div class="col-md-3">
                            <label for="father" class="form-label">اسم الأب</label>
                            <input type="text" class="form-control" placeholder="أدخل اسم الأب" id="father"
                                name="father" required>
                        </div>
                        <div class="col-md-3">
                            <label for="grandpa" class="form-label">اسم الجد</label>
                            <input type="text" class="form-control" placeholder="أدخل اسم الجد" id="grandpa"
                                name="grandpa" required>
                        </div>
                        <div class="col-md-3">
                            <label for="sex" class="form-label">الجنس</label>
                            <select class="form-select" id="sex" name="sex" required>
                                <option selected disabled>- - -</option>
                                <option value="1">ذكر</option>
                                <option value="0">أنثى</option>
                            </select>
                        </div>
                    </div>
                    <!-- 3rd row -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="birthdate" class="form-label">تاريخ الميلاد</label>
                            <input type="date" class="form-control text-center" placeholder="أدخل تاريخ الميلاد"
                                id="birthdate" name="birthdate" required>
                        </div>
                        <div class="col-md-3">
                            <label for="birthplace" class="form-label">مكان الميلاد</label>
                            <input type="text" class="form-control" placeholder="أدخل مكان الميلاد" id="birthplace"
                                name="birthplace">
                        </div>
                        <div class="col-md-2">
                            <label for="wali_lname" class="form-label">لقب الولي</label>
                            <input type="text" class="form-control" placeholder="أدخل لقب الولي" id="wali_lname"
                                name="wali_lname">
                        </div>
                        <div class="col-md-2">
                            <label for="wali_fname" class="form-label">اسم الولي</label>
                            <input type="text" class="form-control" placeholder="أدخل اسم الولي" id="wali_fname"
                                name="wali_fname">
                        </div>
                        <div class="col-md-2">
                            <label for="kinship" class="form-label">نوع القرابة</label>
                            <input type="text" class="form-control" placeholder="أدخل نوع القرابة" id="kinship"
                                name="kinship">
                        </div>
                    </div>
                    <!-- 4th row -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="job" class="form-label">المهنة</label>
                            <input type="text" class="form-control" placeholder="أدخل المهنة" id="job" name="job">
                        </div>
                        <div class="col-md-4">
                            <label for="cultural_level" class="form-label"> المستوى الثقافي</label>
                            <input type="text" class="form-control" placeholder="أدخل المستوى الثقافي"
                                id="cultural_level" name="cultural_level">
                        </div>
                        <div class="col-md-5">
                            <label for="establishment" class="form-label">مؤسسة الانتماء</label>
                            <input type="text" class="form-control" placeholder="أدخل مؤسسة الانتماء" id="establishment"
                                name="establishment">
                        </div>
                    </div>
                    <!-- 5th row -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="phone" class="form-label">رقم الهاتف</label>
                            <input type="text" class="form-control" placeholder="أدخل رقم الهاتف" id="phone"
                                name="phone">
                        </div>
                        <div class="col-md-4">
                            <label for="wali_phone" class="form-label">رقم هاتف الولي</label>
                            <input type="text" class="form-control" placeholder="أدخل رقم هاتف الولي" id="wali_phone"
                                name="wali_phone">
                        </div>
                        <div class="col-md-5">
                            <label for="address" class="form-label">العنوان</label>
                            <input type="text" class="form-control" placeholder="أدخل العنوان" id="address"
                                name="address">
                        </div>

                    </div>
                    <!-- 6th row -->
                    <div class="row">
                        <div class="col-md-7">
                            <label for="notes" class="form-label">ملاحظات</label>
                            <textarea type="text" class="form-control" placeholder="أدخل ملاحظات" id="notes"
                                name="notes" style="height: 90px"></textarea>
                        </div>
                        <div class="col-md-2">

                            <button type="submit" class="btn btn-success btn-lg mt-5 p-3" style="width: 120px"
                                name="insert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"
                                        fill="#fff" />
                                </svg>
                                إضافة
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