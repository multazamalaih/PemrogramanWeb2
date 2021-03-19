<html>
	<head>
		<title>Penggunaan Switch - Case</title>
	</head>
	<body>
		Hari Ini :
		<?php
			$nama_hari = date("l");
			switch ($nama_hari)
			{
				case 'Sunday':
					echo "Waktu Untuk Istirahat";
					break;
				case 'Monday':
					echo "Senin <br>";
					echo "Meeting Awal Minggu Jam 08.00";
					break;
				case 'Tuesday':
					echo "Selasa <br>";
					echo "Pembukaan Workshop Diklat";
					break;
				case 'Wednesday':
					echo"Rabu <br>";
					echo "Seminar Launching Window Vista di JHCC";
					break;
				case 'Thursday':
					echo"Kamis <br>";
					echo "Pertemuan Dengan Mahasiswa";
					break;
				case 'Friday':
					echo"Jum'at <br>";
					echo "Jogging Bersama";
					break;
				default:
					echo"Sabtu <br>";
					echo "Survey Harga Ke Dusit, Mangga Dua";
					break;
			}
			?>
	</body>
</html>