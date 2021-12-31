<?php
include "../config.php";
include "../controllers/ReadersController.php";

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include "../requirements1.php"; ?>
</head>

<style>
a {
    text-decoration: none;
}

.login-page {
    width: 100%;
    height: 100vh;
    display: inline-block;
    display: flex;
    align-items: center;
}

.form-right i {
    font-size: 100px;
}
</style>

<body class="pt-0">
    <div class="login-page bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                    <h2 class="fs-1">Welcome Back!!!</h2>
                                </div>
                            </div>
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="../check.php" class="row g-4" method="post">
                                        <div class="col-12">
                                            <label>اسم المستخدم<span class="text-danger">*</span></label>
                                            <div class="input-group mt-3">
                                                <div class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                    </svg>
                                                </div>
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="أدخل اسم المستخدم">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label>كلمة المرور<span class="text-danger">*</span></label>
                                            <div class="input-group mt-3">
                                                <div class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                                    </svg>
                                                </div>
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="أدخل كلمة المرور">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" name="login"
                                                class="btn btn-primary px-4 float-end mt-4">تسجيل
                                                الدخول</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include "../requirements2.php"; ?>

</body>

</html>