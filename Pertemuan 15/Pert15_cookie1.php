<?php
$value = 'Multazam';
$value2 = 'Multazam - 181011402182';
setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); /* expire in 1
hour */
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='Pert15_cookie2.php'>di sini</a> untuk
pemeriksaan cookies</h2>";
?>