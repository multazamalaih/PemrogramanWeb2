<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "lat_dbase");
$hasil = mysqli_query($link, "select * from tbl_mhs");
while ($data = mysqli_fetch_row($hasil)) {
    echo "$data[0] $data[1] $data[2]<br>";
}
?>