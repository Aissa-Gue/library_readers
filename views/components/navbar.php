<!-- <nav class="navbar navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            برنامج المنخرطين
        </a>

        <form action="" method="post" class="d-flex">
            <input class="form-control me-2" type="number" name="student_nbr" placeholder="رقم التسجيل" required>
            <button class="btn btn-success me-2" name="enter">دخول</button>
            <button class="btn btn-danger" name="exit">خروج</button>
        </form>
    </div>
</nav> -->
<style>
/* Hex Codes: #ef476f // #ffd166 // #06d6a0 // #118ab2 // #073b4c */

nav {
    background: linear-gradient(rgba(255, 255, 255, 0.4),
            rgba(255, 255, 255, 0.2)),
        url(../img/bg_image5.jpg) center / cover no-repeat fixed;
}

#my_logo {
    background-color: #cfe2ff;
    border-color: #b6d4fe;
    border-radious: 25%;
}

#my_title {
    color: #0f5132;
    background-color: #d1e7dd;
    border-color: #badbcc;
}
</style>

<nav class="fixed-top p-3">
    <div class="row align-items-center">
        <div class="col-1 text-center">
            <img src="../img/logo.png" alt="" width="50" height="40">
        </div>
        <div class="col-3">
            <div class="py-3 rounded text-center" id="my_logo">
                <h5 class="fw-bold">برنامج المنخرطين</h5>
            </div>
        </div>

        <div class="col-8">
            <div class="py-3 rounded text-center" id="my_title">
                <h5 class="fw-bold"><?php echo $subtitle ?></h5>
            </div>
        </div>
    </div>
</nav>

<!-- 
<nav class="navbar fixed-top p-0">
    <div class="container-fluid row m-0 p-0">
        <div class="col-12 p-0">
            <a href="../index.php"><img class="w-100" height="150px" src="../img/banner4.jpg" alt=""></a>
        </div>
    </div>
</nav> -->