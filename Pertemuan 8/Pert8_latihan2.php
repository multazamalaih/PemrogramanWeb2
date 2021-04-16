<html>
	<head>
		<title>Contoh Penggunaan UDF</title>
	</head>
	<body>
        <! Menentukan Form Input >
        <form method="POST">
            Masukkan Bilangan Pertama : <br>
            <input type="text" name="A" size="10"><br>
            Masukkan Bilangan Kedua : <br>
            <input type="text" name="B" size="10"><br>
            <input type="submit" value="hitung">
        </form>
        
        <! Membandingkan 2 Buah Bilangan Yang Diinput>

        <?php
        
            @$A = $_POST['A'];
            @$B = $_POST['B'];
            Function jumlah ($A,$B)
            {
                $jumlahbil = $A + $B;
                return $jumlahbil;
            }
            Function kurang ($A,$B)
            {
                $kurangbil = $A - $B;
                return$kurangbil;
            }
            Function kali ($A,$B)
            {
                $kalibil = $A * $B;
                return $kalibil;
            }
            Function bagi ($A,$B)
            {
                @$bagibil = $A / $B;
                return $bagibil;
            }

            echo "<br>";
            echo ("Bilangan Pertama : ");
            echo $A;
            echo "<br>";
            echo ("Bilangan Kedua : ");
            echo $B;
            echo "<br><br>";

            echo "Hasil Penjumlahan 2 Buah Bilangan ";
            echo "<br>";
            $jumlahbil = jumlah($A,$B);
            printf("Penjumlahan Antara : %d + %d = %d", $A,$B,$jumlahbil);
            echo "<br><br>";

            echo "Hasil Pengurangan 2 Buah Bilangan ";
            echo "<br>";
            $kurangbil = kurang($A,$B);
            printf("Pengurangan Antara : %d - %d = %d", $A,$B,$kurangbil);
            echo "<br><br>";

            echo "Hasil Perkalian 2 Buah Bilangan ";
            echo "<br>";
            $kalibil = kali($A,$B);
            printf("Perkalian Antara : %d * %d = %d", $A,$B,$kalibil);
            echo "<br><br>";

            echo "Hasil Pembagian 2 Buah Bilangan ";
            echo "<br>";
            $bagibil = bagi($A,$B);
            printf("Pembagian Antara : %d / %d = %d", $A,$B,$bagibil);
            echo "<br><br>";

            ?>
	</body>
</html>