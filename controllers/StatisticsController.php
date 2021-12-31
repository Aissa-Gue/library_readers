<?php
//top readers table
$topReadersQry = "SELECT lname, fname, father, sex, count(*) as visits,
       SEC_TO_TIME(SUM(TIME_TO_SEC(timediff(exit_time,enter_time)))) AS total_time
FROM a_readers, b_report
WHERE a_readers.soft_id = b_report.soft_id
AND year(c_date) = year(CURRENT_DATE)
GROUP BY b_report.soft_id
ORDER BY visits DESC
LIMIT 10";
$topReadersResult = mysqli_query($conn, $topReadersQry);

//readers by year
$currentYear = date("Y");
$totalReadersQry = "SELECT count(*) as readers FROM a_readers";
$yearlyReadersQry = "SELECT count(*) as readers
FROM a_readers
WHERE year(engagement_date) = '$currentYear'";
$totalReadersResult = mysqli_query($conn, $totalReadersQry);
$yearlyReadersResult = mysqli_query($conn, $yearlyReadersQry);
$totalReaders = mysqli_fetch_array($totalReadersResult)['readers'];
$yearlyReaders = mysqli_fetch_array($yearlyReadersResult)['readers'];

//readers by sex
$maleReadersQry = "SELECT count(*) as male FROM a_readers WHERE sex=1";
$femaleReadersQry = "SELECT count(*) as female FROM a_readers WHERE sex=0";
$maleReadersResult = mysqli_query($conn, $maleReadersQry);
$femaleReadersResult = mysqli_query($conn, $femaleReadersQry);
$maleReaders = mysqli_fetch_array($maleReadersResult)['male'];
$femaleReaders = mysqli_fetch_array($femaleReadersResult)['female'];

//readers by age
$readersAge1Qry = "SELECT TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) AS age
FROM a_readers
HAVING age <= 18";
$readersAge2Qry = "SELECT TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) AS age
FROM a_readers
HAVING age > 18 AND age <= 30";
$readersAge3Qry = "SELECT TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) AS age
FROM a_readers
HAVING age > 30";
$readersAge1Result = mysqli_query($conn, $readersAge1Qry);
$readersAge2Result = mysqli_query($conn, $readersAge2Qry);
$readersAge3Result = mysqli_query($conn, $readersAge3Qry);
$readersAge1 = mysqli_num_rows($readersAge1Result);
$readersAge2 = mysqli_num_rows($readersAge2Result);
$readersAge3 = mysqli_num_rows($readersAge3Result);


//reading average
$readingAvgDailyQry = "SELECT DATE_FORMAT(SEC_TO_TIME(AVG(TIME_TO_SEC(TIMEDIFF(exit_time, enter_time)))/360), '%H:%i:%s') AS average
FROM b_report
WHERE year(c_date) = year(CURRENT_DATE)";
$readingAvgYearlyQry = "SELECT DATE_FORMAT(SEC_TO_TIME(AVG(TIME_TO_SEC(TIMEDIFF(exit_time, enter_time)))), '%H:%i:%s') AS average
FROM b_report
WHERE year(c_date) = year(CURRENT_DATE)";
$readingAvgDailyResult = mysqli_query($conn, $readingAvgDailyQry);
$readingAvgYearlyResult = mysqli_query($conn, $readingAvgYearlyQry);
$readingAvgDaily = mysqli_fetch_array($readingAvgDailyResult)['average'];
$readingAvgYearly = mysqli_fetch_array($readingAvgYearlyResult)['average'];


//graph
$readingHistoryQry = "SELECT MONTHNAME(c_date) as 'month', count(*) as 'visits',
        SEC_TO_TIME(SUM(TIME_TO_SEC(timediff(exit_time,enter_time)))) AS total_time
FROM a_readers, b_report
WHERE a_readers.soft_id = b_report.soft_id
AND YEAR(c_date) = YEAR(CURRENT_DATE)
GROUP BY MONTH(c_date)
ORDER BY MONTH(c_date)";
$readingHistoryResult = mysqli_query($conn, $readingHistoryQry);
$rows = mysqli_fetch_all($readingHistoryResult, MYSQLI_ASSOC);
