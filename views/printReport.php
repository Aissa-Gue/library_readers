<?php
include "../check.php";
include "../controllers/ReportController.php";
$subtitle = "طباعة تقرير الحضور";

//disable validation of form by the browser
header('Cache-Control: no cache');

?>

<html lang="ar">

<head>
    <link rel="stylesheet" href="../css/print_report.css"/>
    <link rel="stylesheet" href="../css/fonts.css">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>المكتبة المركزية - مكتبة الطالبات</title>
</head>

<body>
<h1>تقرير الطالبة</h1>
<div class="global_div">
    <div class="first_block">
        <h2><span>الطالبة: </span>&nbsp <?php echo $fu ?></h2>
        <h2><span>تاريخ الميلاد: </span>&nbsp <?php echo $bi ?></h2>
    </div>
    <div class="second_block">
        <h2><span>المؤسسة: </span>&nbsp <?php echo $es ?></h2>
        <h2><span>المستوى الدراسي: </span>&nbsp <?php echo $ed ?></h2>
    </div>
</div>
<div class="input_div">
    <form action="" method="post">

        <label for="start_date" id="start_label">من:</label>
        <span id="from">
                <input type="date" name="start_date" id="start_input" required/>
            </span>

        <label for="end_date" id="end_label">إلى:</label>
        <span id="to">
                <input type="date" name="end_date" id="end_input" required/>
            </span>

        <input type="submit" name="submitP" value="بحث" id="submit"/>
    </form>
</div>

<table class="table">
    <tr>
        <th class="th_date">التاريخ</th>
        <th class="th">وقت الدخول</th>
        <th class="th">وقت الخروج</th>
    </tr>
    <?php
    if (isset($_POST['submitP'])) {
        foreach ($rows as $record) {
            $id = $record['id'];
            $date = $record['c_date'];
            $en_time = $record['enter_time'];
            $ex_time = $record['exit_time'];
            ?>
            <tr>
                <th class="td_date"><?php echo $date ?> </th>
                <td class="td"> <?php echo $en_time ?></td>
                <td class="td"><?php echo $ex_time ?></td>
            </tr>

            <script type="text/javascript">
                document.getElementById("from").innerHTML = "<?php echo $start_date ?>";
                document.getElementById("to").innerHTML = "<?php echo $end_date ?>";
                document.getElementById("submit").style.display = "none";
            </script>
            <?php
        }
    }
    ?>
</table>
<a href="../index.php" class="home" id="homeBtn">
    <img src="../img/home.png" class="icon">
</a>
<a href="readers.php" class="search" id="searchBtn">
    <img src="../img/search.png" class="icon">
</a>
<a href="" class="print" id="printBtn">
    <img src="../img/print.png" class="icon">
</a>

<script type="text/javascript">
    //Hide print btn an show print window
    document.getElementById("printBtn").onclick = function () {
        document.getElementById("printBtn").style.display = "none";
        document.getElementById("searchBtn").style.display = "none";
        document.getElementById("homeBtn").style.display = "none";
        window.print();
    }
</script>
</body>

</html>