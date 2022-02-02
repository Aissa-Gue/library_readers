<?php
include "../check.php";

if($_SESSION['id'] != 1){     
    header("location: home.php");
}

//include "../controllers/ReadersController.php";
$subtitle = "إعدادات البرنامج";


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

                <div class="">
                    <ul class="nav nav-pills mx-auto justify-content-center mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-database-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-database" type="button" role="tab" aria-controls="pills-database"
                                aria-selected="true">قاعدة البيانات
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-accounts-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-accounts" type="button" role="tab" aria-controls="pills-accounts"
                                aria-selected="false">المستخدمين
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-database" role="tabpanel">
                            <h4>إدارة قاعدة البيانات</h4>
                            <hr>
                            <form method="post" action="../controllers/file_upload.php" enctype="multipart/form-data">
                                <!-- First row -->
                                <div class="form-group row mb-3">
                                    <div class="input-group">
                                        <label class="col-md-3">أدخل قائمة المنخرطين (Excel)</label>
                                        <div class="col-md-5">
                                            <input type="file" name="uploadfile" class="form-control"
                                                accept=".xlsx, .xls" required />
                                        </div>
                                        <div class="col-md-3">
                                            <input type="submit" name="submit" class="btn btn-primary" value="إدخال">
                                            <a class="btn btn-secondary" href="../template/ex_1.xlsx">
                                                <i class="bi bi-download"> نموذج</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END First row -->
                            </form>
                            <form method="post" action="../controllers/import_db.php" enctype="multipart/form-data">
                                <!-- Second row -->
                                <div class="form-group row mb-3">
                                    <div class="input-group">
                                        <label class="col-md-3">أدخل النسخة الاحتياطية (SQL) </label>
                                        <div class="col-md-5">
                                            <input type="file" name="db" class="form-control" accept=".sql" required />
                                        </div>
                                        <div class="col-md-3">
                                            <input type="submit" name="importDb" class="btn btn-primary" value="إدخال">
                                        </div>
                                    </div>
                                </div>
                                <!-- END second row -->
                            </form>
                            <form method="post" action="../controllers/export_db.php" enctype="multipart/form-data">
                                <!-- Third row -->
                                <div class="form-group row mb-3">
                                    <label class="col-md-3">استخراج قاعدة البيانات</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="submit" name="export" class="btn btn-success"
                                                value="استخراج قاعدة البيانات">
                                        </div>
                                    </div>
                                </div>
                                <!-- END Third row -->
                            </form>
                            <!-- Forth row -->
                            <form method="post" action="../controllers/drop_db.php" enctype="multipart/form-data">
                                <div class="form-group row mb-3">
                                    <label class="col-md-3">حذف قاعدة البيانات</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="submit" name="drop" class="btn btn-danger"
                                                value="   حذف قاعدة البيانات   "
                                                onclick="return confirm('هل أنت متأكد؟')">
                                        </div>
                                    </div>
                                </div>
                                <!-- END Forth row -->
                            </form>
                        </div>


                        <div class="tab-pane fade" id="pills-accounts" role="tabpanel">
                            <h4>إدارة حسابات المستخدمين</h4>
                            <hr>
                            <form method="post" action="../controllers/editAccount.php">
                                <!-- First row -->
                                <div class="form-group row mb-3">
                                    <div class="input-group">
                                        <label class="col-md-2">كلمة مرور المسؤول</label>
                                        <div class="col-md-4">
                                            <input type="password" name="adminPwd" class="form-control"
                                                placeholder="أدخل كلمة مرور المسؤول" required />
                                        </div>
                                    </div>
                                </div>
                                <!-- END First row -->
                                <!-- Second row -->
                                <div class="form-group row mb-3">
                                    <div class="input-group">
                                        <label class="col-md-2">نوع المستخدم</label>
                                        <div class="col-md-4">
                                            <select class="form-select" name="role">
                                                <option value="1">المدير العام</option>
                                                <option value="2">مسؤول الإنخراط</option>
                                                <option value="3">قيمة المكتبة</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="input-group">
                                        <label class="col-md-2">اسم المستخدم الجديد</label>
                                        <div class="col-md-4">
                                            <input type="text" name="newUsername" class="form-control"
                                                placeholder="أدخل اسم المستخدم الجديد" required />
                                        </div>
                                    </div>
                                </div>
                                <!-- END second row -->
                                <!-- Third row -->
                                <div class="form-group row mb-3">
                                    <label class="col-md-2">كلمة المرور الجديدة</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="password" name="newPwd1" class="form-control"
                                                placeholder="أدخل كلمة المرور الجديدة">
                                        </div>
                                    </div>
                                </div>
                                <!-- END Third row -->
                                <!-- Forth row -->
                                <div class="form-group row mb-3">
                                    <label class="col-md-2">تأكيد كلمة المرور</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="password" name="newPwd2" class="form-control"
                                                placeholder="أعد إدخال كلمة المرور الجديدة">
                                        </div>
                                    </div>
                                </div>
                                <!-- END Forth row -->
                                <div class="form-group row mb-3">
                                    <label class="col-md-2"></label>
                                    <div class="col-sm-4">
                                        <input type="submit" name="editAcc"
                                            class="btn btn-success btn-block rounded-pill px-3" value="تعديل الحساب">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include "../requirements2.php"; ?>

</body>

</html>