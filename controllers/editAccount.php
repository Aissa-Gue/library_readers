<?php
include '../check.php';

// Edit account
if (isset($_POST['editAcc'])) {
    $oldPwd = md5($_POST['oldPwd']);
    $newUsername = $_POST['newUsername'];
    $newPwd1 = md5($_POST['newPwd1']);
    $newPwd2 = md5($_POST['newPwd2']);

    $username = $_SESSION['user'];
    
    $sqlOld = "SELECT * from users WHERE user_name='$username' and password='$oldPwd'";
    $query = mysqli_query($conn, $sqlOld);
    if (mysqli_num_rows($query) == 1) {
        if ($newPwd1 == $newPwd2) {
            $sql = "UPDATE users SET user_name='$newUsername', password='$newPwd1' WHERE user_name='$username'";
            if (mysqli_query($conn, $sql) and mysqli_affected_rows($conn) > 0) {
                echo "<script> alert('تم تغيير إعدادات الحساب بنجاح') </script>";
                echo "<script> window.location.href= 'logout.php'</script>";
            }
        } else {
            echo "<script> alert('كلمة المرور الجديدتين غير متطابقتين') </script>";
            echo "<script> window.location.href= '../views/settings.php'</script>";
        }
    } else {
        echo "<script> alert('كلمة المرور القديمة غير صحيحة') </script>";
        echo "<script> window.location.href= '../views/settings.php'</script>";
    }
}