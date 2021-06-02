<?php
	include "koneksi.php";
	
	$articleID = $_GET['articleID'];

	$query = mysqli_query($connect, "DELETE FROM articles WHERE articleID='$articleID'");
	@$sql .= mysqli_query($connect, "ALTER TABLE articles DROP articleID");
	@$sql .= mysqli_query($connect, "ALTER TABLE articles ADD articleID INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
	mysqli_multi_query($connect , $query);

	if($query)
	{
		echo "<h3 align=center>Artikel Berhasil Dihapus</h3>";
		echo "<A href=\"tampil_articles.php\">List</A>";
	}
	else
	{
		echo "<h2 align=center>Artikel Gagal Dihapus</h2>";
	}
?>