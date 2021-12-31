<?php
include "../check.php";
include "../controllers/ReadersPreviewController.php";
$subtitle = "طباعة بطاقة الانخراط";

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include "../requirements1.php"; ?>
</head>

<body>
    <div class="container-fluid background_img">
        <div class="row my_hidden">
            <?php include "../views/components/navbar.php" ?>
        </div>

        <div class="row justify-content-center my_margin_top">
            <div class="col-1 fixed-top my_hidden">
                <?php include "../views/components/sidebar.php" ?>
            </div>

            <div class="col-11 offset-1 ">
                <?php if ($sex == 0) { ?>
                <div class="my_print_container_in logo_bg_in mb-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- internal card -->
                            <div class="row px-2 mb-5">
                                <!-- establishment header -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="my_fs fw-bold text-center my_mt_mb">
                                            <span class="float-start">
                                                <span class="my_font_Jomhuria">مؤسسة الشيخ عمي سعيد</span>
                                                <br>
                                                <span class="my_font_Scheherazade">ثقافة - تربية - تراث</span>
                                            </span>
                                            <br><br><br>
                                            <span class="my_lib">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                المكتبة المركزية</span>
                                        </p><br><br>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="../img/library_logo.png" alt="avatar"
                                            style="height: 3.2cm; width: 3.2cm;">
                                    </div>
                                </div>
                                <!-- END establishment header -->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="h6">
                                            <span class="fw-bold my_title">البطاقة الداخلية للانخراط رقم:</span>
                                            <span class="my_font_Scheherazade"><?php echo $stud_id ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">اللقب:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $lname ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">الاسم: </span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade">
                                                <?php echo $fname . ' بنت ' . $father . ' بن ' . $grandpa ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">تاريخ الميلاد:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $birthdate ?></span>
                                            <span class="fw-bold my_title">بـ: </span>
                                            <span class="my_font_Scheherazade"><?php echo $birthplace ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">المهنة:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $job ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="h6">
                                            <span class="fw-bold my_title">المستوى
                                                الثقافي:</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="my_font_Scheherazade"><?php echo $cultural_level ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-auto">
                                        <p class="h6">
                                            <span class="fw-bold my_title">مؤسسة الانتماء:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-auto">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $establishment ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">العنوان:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $address ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-auto">
                                        <p class="h6">
                                            <span class="fw-bold my_title">تاريخ الانخراط:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-auto">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $engagement_date ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">رقم الهاتف:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $phone ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="h6">
                                            <span class="fw-bold my_title">رقم هاتف
                                                الولي:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="my_font_Scheherazade"><?php echo $wali_phone ?></span>
                                        </p>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">رقم التسجيل:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $soft_id ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">ملاحظات:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $notes ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="my_mr_in my_font_Scheherazade">قيم المكتبة</p>
                                    </div>
                                </div>
                            </div> <!-- end border -->
                        </div>
                    </div>
                </div>
                <!-- END internal card -->


                <!-- External card talibat -->
                <div class="my_print_container_ex logo_bg_ex mt-3">
                    <div class="row px-2">
                        <!-- establishment header -->
                        <div class="row">
                            <div class="col-sm-9">
                                <p class="my_fs fw-bold text-center my_mt_mb">
                                    <span class="float-start">
                                        <span class="my_font_Jomhuria">مؤسسة الشيخ عمي سعيد</span>
                                        <br>
                                        <span class="my_font_Scheherazade">ثقافة - تربية - تراث</span>
                                    </span>
                                    <br><br><br>
                                    <span class="my_lib">&nbsp;&nbsp;
                                        المكتبة المركزية</span>
                                </p>
                            </div>
                            <div class="col-sm-3">
                                <img src="../img/library_logo.png" alt="avatar" style="height: 2.7cm; width: 2.7cm;">
                            </div>
                        </div>
                        <!-- END establishment header -->

                        <div class="row my_mt_mb">
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">بطاقة المنخرطة رقم:</span>
                                    <span class="my_font_Scheherazade"><?php echo $stud_id ?></span>
                                </p>
                            </div>
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">الصادرة بـ: </span>
                                    <span class="my_font_Scheherazade"><?php echo $date ?></span>
                                </p>
                            </div>
                        </div>

                        <div class="row my_mt_mb">
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">اللقب:</span>
                                    <span class="my_font_Scheherazade"><?php echo $lname ?></span>
                                </p>
                            </div>
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">الاسم: </span>
                                    <span class="my_font_Scheherazade">
                                        <?php echo $fname . ' بنت ' . $father ?>
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div class="row my_mt_mb">
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">المهنة:</span>
                                    <span class="my_font_Scheherazade"><?php echo $job ?></span>
                                </p>
                            </div>
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">بـ: </span>
                                    <span class="my_font_Scheherazade"><?php echo $establishment ?></span>
                                </p>
                            </div>
                        </div>

                        <div class="row my_mt_mb">
                            <div class="col-sm-12">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">المستوى الثقافي:</span>
                                    <span class="my_font_Scheherazade"><?php echo $cultural_level ?></span>
                                </p>
                            </div>
                        </div>

                        <div class="row my_mt_mb">
                            <div class="col-sm-12">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">رقم التسجيل:</span>
                                    <span class="my_font_Scheherazade"><?php echo $soft_id ?></span>
                                    <span class="my_font_Scheherazade my_mr_ex">قيم المكتبة</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><br>
                <!-- END External card talibat -->

                <?php } else { ?>
                <!-- ************ internal card markazia ************** -->
                <div class="my_print_container_in logo_bg_in mb-2">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <!-- internal card -->
                            <div class="row px-2 mb-5">
                                <!-- establishment header -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="my_fs fw-bold text-center my_mt_mb">
                                            <span class="float-start">
                                                <span class="my_font_Jomhuria">مؤسسة الشيخ عمي سعيد</span>
                                                <br>
                                                <span class="my_font_Scheherazade">ثقافة - تربية - تراث</span>
                                            </span>
                                            <br><br><br>
                                            <span class="my_lib">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                المكتبة المركزية</span>
                                        </p><br><br>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="../img/avatar.png" alt="avatar"
                                            style="height: 3.2cm; width: 3.2cm; opacity: 0.4">
                                    </div>
                                </div>
                                <!-- END establishment header -->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="h6">
                                            <span class="fw-bold my_title">البطاقة الداخلية للانخراط رقم:</span>
                                            <span class="my_font_Scheherazade"><?php echo $stud_id ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">اللقب:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $lname ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">الاسم: </span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade">
                                                <?php echo $fname . ' بن ' . $father . ' بن ' . $grandpa ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">تاريخ الميلاد:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $birthdate ?></span>
                                            <span class="fw-bold my_title">بـ: </span>
                                            <span class="my_font_Scheherazade"><?php echo $birthplace ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">المهنة:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $job ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="h6">
                                            <span class="fw-bold my_title">المستوى
                                                الثقافي:</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="my_font_Scheherazade"><?php echo $cultural_level ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-auto">
                                        <p class="h6">
                                            <span class="fw-bold my_title">مؤسسة الانتماء:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-auto">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $establishment ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">العنوان:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $address ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-auto">
                                        <p class="h6">
                                            <span class="fw-bold my_title">تاريخ الانخراط:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-auto">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $engagement_date ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">رقم الهاتف:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $phone ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="h6">
                                            <span class="fw-bold my_title">رقم هاتف
                                                الولي:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="my_font_Scheherazade"><?php echo $wali_phone ?></span>
                                        </p>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">رقم التسجيل:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $soft_id ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h6">
                                            <span class="fw-bold my_title">ملاحظات:</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="h6">
                                            <span class="my_font_Scheherazade"><?php echo $notes ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="my_mr_in my_font_Scheherazade">قيم المكتبة</p>
                                    </div>
                                </div>
                            </div> <!-- end border -->
                        </div>
                    </div>
                </div>
                <!-- END internal card markazia-->

                <!-- External card markazia -->
                <div class="my_print_container_ex logo_bg_ex mt-3">
                    <div class="row px-2">
                        <!-- establishment header -->
                        <div class="row">
                            <div class="col-sm-9">
                                <p class="my_fs fw-bold text-center my_mt_mb">
                                    <span class="float-start">
                                        <span class="my_font_Jomhuria">مؤسسة الشيخ عمي سعيد</span>
                                        <br>
                                        <span class="my_font_Scheherazade">ثقافة - تربية - تراث</span>
                                    </span>
                                    <br><br><br>
                                    <span class="my_lib">&nbsp;&nbsp;
                                        المكتبة المركزية</span>
                                </p>
                            </div>
                            <div class="col-sm-3">
                                <img src="../img/avatar.png" alt="avatar"
                                    style="height: 3.5cm; width: 2.7cm; opacity: 0.4">
                            </div>
                        </div>
                        <!-- END establishment header -->

                        <div class="row my_mt_mb">
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">بطاقة المنخرط رقم:</span>
                                    <span class="my_font_Scheherazade"><?php echo $stud_id ?></span>
                                </p>
                            </div>
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">الصادرة بـ: </span>
                                    <span class="my_font_Scheherazade"><?php echo $date ?></span>
                                </p>
                            </div>
                        </div>

                        <div class="row my_mt_mb">
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">اللقب:</span>
                                    <span class="my_font_Scheherazade"><?php echo $lname ?></span>
                                </p>
                            </div>
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">الاسم: </span>
                                    <span class="my_font_Scheherazade">
                                        <?php echo $fname . ' بن ' . $father ?>
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div class="row my_mt_mb">
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">المهنة:</span>
                                    <span class="my_font_Scheherazade"><?php echo $job ?></span>
                                </p>
                            </div>
                            <div class="col-sm-auto">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">العنوان: </span>
                                    <span class="my_font_Scheherazade"><?php echo $address ?></span>
                                </p>
                            </div>
                        </div>

                        <div class="row my_mt_mb">
                            <div class="col-sm-12">
                                <p class="my_fs">
                                    <span class="fw-bold my_title">رقم التسجيل:</span>
                                    <span class="my_font_Scheherazade"><?php echo $soft_id ?></span>
                                    <span class="my_font_Scheherazade my_mr_ex">قيم المكتبة</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><br>
                <!-- END External card markazia -->
                <?php } ?>

                <!-- Print btn -->
                <div class="dropdown my_position_fixed my_hidden">
                    <button class="btn btn-success btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        id="dropdownMenu" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
                            class="bi bi-printer-fill" viewBox="0 0 16 16">
                            <path
                                d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                            <path
                                d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                        </svg>
                        طباعة البطاقة
                    </button>

                    <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenu">
                        <li>
                            <a class="dropdown-item" onclick="doPrint();show_card();return false;">الداخلية
                                والخارجية</a>
                        </li>

                        <li>
                            <a class="dropdown-item" onclick="hide_card();doPrint();show_card();return false;">
                                الخارجية فقط</a>
                        </li>
                    </ul>
                </div>
                <!-- END Print btn -->



            </div>
        </div>
    </div>

    <?php include "../requirements2.php"; ?>
    <script>
    function doPrint() {
        window.print();
        //window.history.back();
    }


    function hide_card() {
        $(".my_print_container_in").hide();
    }

    function show_card() {
        $(".my_print_container_in").show();
    }
    </script>
</body>

</html>