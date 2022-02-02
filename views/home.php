<?php
include "../check.php";
if($_SESSION['id'] == 2){
    header("location: readersAdd.php");
}
include "../controllers/ReportController.php";
$subtitle = "تسجيل الحضور";

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

                <form action="" method="post">
                    <div class="row">
                        <div class="col-auto px-1">
                            <input class="form-control text-center" type="number" name="student_nbr"
                                placeholder="رقم المنخرط" required>
                        </div>
                        <div class="col-auto px-0">
                            <button class="btn btn-success px-4" name="enter">دخول</button>
                        </div>
                        <div class="col-auto px-1">
                            <button class="btn btn-danger px-4" name="exit">خروج</button>
                        </div>

                    </div>
                </form>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">رقم المنخرط</th>
                            <th scope="col">اسم المنخرط</th>
                            <th scope="col" class="text-center">تاريخ الميلاد</th>
                            <th scope="col" class="text-center">وقت الدخول</th>
                            <th scope="col" class="text-center">وقت الخروج</th>
                            <th scope="col" class="text-center">حذف الحضور</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <th scope="row" class="text-center"><?php echo $row['soft_id'] ?></th>
                            <td><?php echo $row['lname'].' '.$row['fname'].' بنت '.$row['father'] ?></td>
                            <td class="text-center"><?php echo $row['birthdate'] ?></td>
                            <td class="text-center"><?php echo $row['enter_time'] ?></td>
                            <td class="text-center"><?php echo $row['exit_time'] ?></td>
                            <td class="text-center">
                                <a onclick="return confirm('هل تريد بالتأكيد حذف الحضور؟')"
                                    href="?log=<?php echo $row['id'] ?>" class="text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                            </td>
                        </tr>
                        <?php
                    }
                    if (mysqli_num_rows($result) == 0) {?>
                        <tr>
                            <td colspan="6" class="text-center">لا وجود لطالبات حاليا</td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include "../requirements2.php"; ?>

    <!-- BLOCK ENTER BUTTON -->
    <script type="text/javascript">
    $(document).ready(function() {
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
    </script>
</body>

</html>