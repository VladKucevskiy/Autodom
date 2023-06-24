<?php
$today = getdate();


$mday = $today[mday];
$mon = $today[mon];
$year = $today[year];
$hours=$today[hours];
$minutes=$today[minutes];
$seconds=$today[seconds];
$DateTime= $year.'-'.$mon.'-'.$mday.' '.$hours.':'.$minutes.':'.$seconds;

echo $DateTime;
?>