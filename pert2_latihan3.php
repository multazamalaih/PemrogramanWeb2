<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator Sederhana</title>
    </head>
    <body>
        <center>
        <font face="comic sans serif" size=5 color= "blue">Kalkulator Sederhana</font><br><br>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Nilai 1</td>
                        <td></td>
                        <td>Nilai 2</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="nilai1"></td>
                        <td><select name="pilih">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option></select>
                        </td>
                        <td><input type="text" name="nilai2"></td>
                        <td><input type="submit" name="hitung" value="Hitung"></td>
                    </tr>
                </table>
            </form>
        <?php
            if(isset($_POST['hitung'])){
            $bil1 = $_POST['nilai1'];
            $bil2 = $_POST['nilai2'];
            $pilih = $_POST['pilih'];
                
            if($pilih){
            if($bil1 == "" || $bil2 == ""){
                ?> <script>alert("Nilai belum diisi!"); </script> <?php
            }elseif($pilih == '+'){
                $hasil = $bil1 + $bil2;
                echo "Hasil  $bil1 + $bil2 = ".$hasil;
            }elseif($pilih == '-'){
                $hasil = $bil1 - $bil2;
                echo "Hasil  $bil1 - $bil2 = ".$hasil;
            }elseif($pilih == '*'){
                $hasil = $bil1 * $bil2;
                echo "Hasil  $bil1 * $bil2 = ".$hasil;
            }elseif($pilih == '/'){
                $hasil = $bil1 / $bil2;
                echo "Hasil  $bil1 / $bil2 = ".$hasil;
            }
            }
            }
        ?>
        <center>
    </body>
</html>