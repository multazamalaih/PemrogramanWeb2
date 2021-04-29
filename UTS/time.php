<?php
date_default_timezone_set('Asia/Jakarta');
?>

<script type="text/javascript">
    function tampilkanwaktu() { 
        var waktu = new Date();
        var sh = waktu.getHours() + ""; 
        var sm = waktu.getMinutes() + ""; 
        var ss = waktu.getSeconds() + ""; 
        document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
    }
</script>

<?php
$hari = date('l');

if ($hari == "Sunday") {
    $day = "Minggu";
} elseif ($hari == "Monday") {
    $day = "Senin";
} elseif ($hari == "Tuesday") {
    $day = "Selasa";
} elseif ($hari == "Wednesday") {
    $day = "Rabu";
} elseif ($hari == "Thursday") {
    $day = ("Kamis");
} elseif ($hari == "Friday") {
    $day = "Jum'at";
} elseif ($hari == "Saturday") {
    $day = "Sabtu";
}
$tgl = date('d');
$bulan = date('F');
if ($bulan == "January") {
    $month = " Januari ";
} elseif ($bulan == "February") {
    $month = " Februari ";
} elseif ($bulan == "March") {
    $month = " Maret ";
} elseif ($bulan == "April") {
    $month = " April ";
} elseif ($bulan == "May") {
    $month = " Mei ";
} elseif ($bulan == "June") {
    $month = " Juni ";
} elseif ($bulan == "July") {
    $month = " Juli ";
} elseif ($bulan == "August") {
    $month = " Agustus ";
} elseif ($bulan == "September") {
    $month = " September ";
} elseif ($bulan == "October") {
    $month = " Oktober ";
} elseif ($bulan == "November") {
    $month = " November ";
} elseif ($bulan == "December") {
    $month = " Desember ";
}
$tahun = date('Y');
?>