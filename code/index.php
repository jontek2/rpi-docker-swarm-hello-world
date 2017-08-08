<?php

$date = date("Y-m-d H:i:s");
$uptime = shell_exec('uptime');
$temp = shell_exec('cat /sys/class/thermal/thermal_zone0/temp');
$ip = shell_exec('hostname -I');


echo "<center>";
echo "<h1>hello world</h1>";
echo "ip: $ip <br>";
echo "uptime: $uptime <br>";
echo "temp: ";
echo number_format($temp,0,".",".");
echo "<br>date: $date";
echo "</center>"
?>