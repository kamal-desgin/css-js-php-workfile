<!DOCTYPE html>
<html>
<body>

<!--count from and to no fo days -->
<?php
$startTimeStamp = strtotime("2020/07/01");
$endTimeStamp = strtotime("2020/07/17");

$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
echo $numberDays = intval($numberDays);
//output: 16
?>

<!-- one month for date display -->
<?php
$now = strtotime('1 January 2020');
for ($i = 0; $i <= 40; $i++) {
    echo date('d M y', strtotime('+' . $i .' day', $now)) .PHP_EOL; 
    echo '<br>';
}
?>


<!-- joining to end date display 3month plan -->
<?php
$joindate = strtotime("2020-08-08");
$enddate = strtotime("2020-11-06");
$timeDiff = abs($enddate - $joindate);
$numberDays = $timeDiff/86400; 
// and you might want to convert to integer
$numberDays = intval($numberDays);

for ($i = 0; $i <= $numberDays; $i++) {
    echo date('d M y', strtotime('+' . $i .' day', $joindate)) .PHP_EOL; 
    echo '<br>';
}
?>


<!-- total month calculation-->
<?php
$date1 = '2017-01-20'; //join date
$date2 = '2019-01-20'; //releving date calculate

$ts1 = strtotime($date1);
$ts2 = strtotime($date2);

$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);

$month1 = date('m', $ts1);
$month2 = date('m', $ts2);

echo 'Total Months:' .$joining_months = (($year2 - $year1) * 12) + ($month2 - $month1);
//output: Total Months:24
?> 


<!--before one month date-->
<?php
  $d = strtotime("-1 Months");
  echo date("Y-m-d h:i:sa", $d);
?>

<?php
$oneMonthAgo = new \DateTime('1 month ago');
echo $oneMonthAgo->format('Y-m-d');
?> 

<!-- next one Month date -->
<?php
   $date = "2016-01-29";
$date = date('Y-m-d', strtotime("last day of next month",strtotime($date)));
echo $date;
?>




</body>
</html>