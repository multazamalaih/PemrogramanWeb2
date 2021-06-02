<?php
	include "koneksi.php";
	
	$ID = $_POST['ID'];
	$judul = $_POST['title'];
	$penulis = $_POST['author'];
	$lead = $_POST['abstraksi'];
	$content = $_POST['content'];
	date_default_timezone_set('Asia/Jakarta');
	$time = date("d M Y, H:i");

	$lead = str_replace("\r\n","<br>",$lead);
	$content = str_replace("\r\n","<br>",$content);

	$query = "UPDATE articles SET judul='$judul',penulis='$penulis',lead='$lead',content='$content',waktu='$time' WHERE articleID='$ID'";
	$hasil=mysqli_query($connect , $query);

	if($hasil)
	{
		echo "<h3 align=center>Artikel Berhasil Di Update</h3>";
		echo "<A href=\"tampil_articles.php\">List</A>";
	}
	else
	{
		echo "<h2 align=center>Artikel Gagal Di Update</h2>";
	}
?>