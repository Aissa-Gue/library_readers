<?php
include "../check.php";
include "../controllers/StatisticsController.php";
$subtitle = "إحصائيات";

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


                <div class="row">

                    <!-- second card -->
                    <div class="col-3">
                        <div class="card text-white mb-3" style="background-color: rgba(1,1,122,0.9);">
                            <div class="card-header text-center">عدد المنخرطين</div>
                            <div class="card-body">
                                <h6 class="card-title text-center">حسب الجنس</h6>
                                <div class="row justify-content-center text-center fw-bold py-2">
                                    <div class="col-5 px-2">
                                        <p class="card-text"><?php echo $maleReaders ?></p>
                                        <p class="card-text my_fs_7">ذكور</p>
                                    </div>
                                    <div class="col-1 px-2">
                                        <p class="card-text">|</p>
                                    </div>
                                    <div class="col-5 px-2">
                                        <p class="card-text"><?php echo $femaleReaders ?></p>
                                        <p class="card-text my_fs_7">إناث</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- second card -->
                    <div class="col-3">
                        <div class="card text-white mb-3" style="background-color: rgba(8,14,44,0.8);">
                            <div class="card-header text-center">عدد المنخرطين</div>
                            <div class="card-body">
                                <h6 class="card-title text-center">حسب العمر</h6>
                                <div class="row justify-content-center text-center fw-bold py-2">
                                    <div class="col-3 px-2">
                                        <p class="card-text"><?php echo $readersAge1 ?></p>
                                        <p class="card-text my_fs_7">8-18</p>
                                    </div>
                                    <div class="col-1 px-2">
                                        <p class="card-text">|</p>
                                    </div>
                                    <div class="col-3 px-2">
                                        <p class="card-text"><?php echo $readersAge2 ?></p>
                                        <p class="card-text my_fs_7">18-30</p>
                                    </div>
                                    <div class="col-1 px-2">
                                        <p class="card-text">|</p>
                                    </div>
                                    <div class="col-3 px-2">
                                        <p class="card-text"><?php echo $readersAge3 ?></p>
                                        <p class="card-text my_fs_7">+30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- second card -->
                    <div class="col-3">
                        <div class="card text-white mb-3" style="background-color: rgba(0,105,146,1);">
                            <div class="card-header text-center">عدد المنخرطين</div>
                            <div class="card-body">
                                <h6 class="card-title text-center">حسب السنوات</h6>
                                <div class="row justify-content-center text-center fw-bold py-2">
                                    <div class="col-5 px-2">
                                        <p class="card-text"><?php echo $yearlyReaders ?></p>
                                        <p class="card-text my_fs_7">السنة الحالية</p>
                                    </div>
                                    <div class="col-1 px-2">
                                        <p class="card-text">|</p>
                                    </div>
                                    <div class="col-5 px-2">
                                        <p class="card-text"><?php echo $totalReaders ?></p>
                                        <p class="card-text my_fs_7">كل السنوات</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- second card -->
                    <div class="col-3">
                        <div class="card text-white mb-3" style="background-color: rgba(1,50,67,0.9);">
                            <div class="card-header text-center">معدل القراءة السنوي</div>
                            <div class="card-body">
                                <h6 class="card-title text-center">السنة الحالية</h6>
                                <div class="row justify-content-center text-center fw-bold py-2">
                                    <div class="col-5 px-1">
                                        <p class="card-text"><?php echo $readingAvgYearly ?></p>
                                        <p class="card-text my_fs_7">في السنة</p>
                                    </div>
                                    <div class="col-1 px-2">
                                        <p class="card-text">|</p>
                                    </div>
                                    <div class="col-5 px-1">
                                        <p class="card-text"><?php echo $readingAvgDaily ?></p>
                                        <p class="card-text my_fs_7">في اليوم</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- second card -->
                    <div class="col-6">
                        <div class="card border-primary mb-3">
                            <div class="card-header text-center">إحصائيات الزيارات</div>
                            <div class="card-body text-primary">
                                <canvas id="myChart" width="400" height="190"></canvas>

                                <script>
                                const ctx = document.getElementById('myChart').getContext('2d');
                                const mixedChart = new Chart(ctx, {
                                    data: {
                                        datasets: [{
                                            type: 'bar',
                                            label: 'عدد الزيارات',
                                            data: [<?php
                                                foreach ($rows as $row): echo "'" . $row['visits'] . "'" . ','; endforeach;
                                                ?>],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 159, 64, 0.2)',
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 159, 64, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)',
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)'
                                            ],
                                            borderWidth: 1
                                        }, ],
                                        labels: [
                                            <?php
                                            foreach ($rows as $row):
                                                echo "'" . $row['month'] . "'" . ",";
                                            endforeach;
                                            ?>
                                        ]
                                    },

                                });
                                </script>

                            </div>
                        </div>
                    </div>


                    <!-- second card -->
                    <div class="col-6">
                        <div class="card border-primary mb-3">
                            <div class="card-header text-center">أكثر المنخرطات زيارة (السنة الحالية)</div>
                            <div class="card-body text-primary">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">الاسم</th>
                                            <th scope="col" class="text-center">عدد الزيارات</th>
                                            <th scope="col" class="text-center">إجمالي المدة</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $i = 0;
                                while ($row = mysqli_fetch_array($topReadersResult)) {
                                    ?>
                                        <tr>
                                            <th scope="row" class="text-danger"><?php echo ++$i ?></th>
                                            <?php if ($row['sex'] == 0) { ?>
                                            <td class="">
                                                <?php echo
                                                    $row['lname'] . '&nbsp;' . $row['fname'] . ' بنت ' . $row['father'] ?>
                                            </td>
                                            <?php } else { ?>
                                            <td class="">
                                                <?php echo
                                                    $row['lname'] . '&nbsp;' . $row['fname'] . ' بن ' . $row['father'] ?>
                                            </td>
                                            <?php } ?>
                                            <td class="text-center text-primary fw-bold"><?php echo $row['visits'] ?>
                                            </td>
                                            <td class="text-center text-success fw-bold">
                                                <?php echo $row['total_time'] ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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