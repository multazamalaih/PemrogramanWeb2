<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> UTS - Multazam </title>
    </head>
    <body>
    <form method="POST"  action="">
        <table align="center" border="1" cellpadding="0" cellspacing="0"> 
            <tr align="center"><td><h2> <b>Input Data Pasien Covid 19</b></h2></td></tr>
            <tr> 
                <td> 
                <table width="650" border="0" cellpadding="0" cellspacing="10" align="center"> 
                    <tr>
                        <td>Nama Wilayah</td> 
                        <td> : </td> 
                        <td>
                        <select name="wilayah">
                        <option value="DKI Jakarta">DKI Jakarta</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Banten">Banten</option>
                        <option value="Jawa Tengah">Jawa Tengah</option></td>
                        </tr> 
                    <tr> 
                        <td>Jumlah Positif</td> 
                        <td> : </td>
                        <td><input name="positif" type="text" size="30" /></td> 
                        </tr> 
                    <tr> 
                        <td>Jumlah Dirawat</td> 
                        <td> : </td>
                        <td><input name="dirawat" type="text" size="30" /></td> 
                        </tr> 
                    <tr> 
                        <td>Jumlah Sembuh</td> 
                        <td> : </td>
                        <td><input name="sembuh" type="text" size="30" /></td> 
                        </tr> 
                    <tr> 
                        <td>Jumlah Meninggal</td> 
                        <td> : </td>
                        <td><input name="meninggal" type="text" size="30" /></td> 
                        </tr>
                    <tr> 
                        <td>Nama Operator</td> 
                        <td> : </td>
                        <td><input name="operator" type="text" size="30" /></td> 
                        </tr>
                    <tr> 
                        <td>NIM Mahasiswa</td> 
                        <td> : </td>
                        <td><input name="nim" type="text" size="30" /></td> 
                        </tr>
                    <tr> 
                        <td colspan="4" align="center">
                        <input type="submit" value="Simpan" /></td> 
                        </tr> 
                </table> 
                </td> 
            </tr> 
        </table> 
    </form> 

    <?php
    include "time.php";
    if (isset($_POST["wilayah"]) AND isset($_POST["positif"]) AND isset($_POST["dirawat"]) AND isset($_POST["sembuh"])
    AND isset($_POST["meninggal"]) AND isset($_POST["operator"]) AND isset($_POST["nim"]))
        {
            $wilayah = $_POST["wilayah"];
            $positif = $_POST["positif"];
            $dirawat = $_POST["dirawat"];
            $sembuh = $_POST["sembuh"];
            $meninggal = $_POST["meninggal"];
            $operator = $_POST["operator"];
            $nim = $_POST["nim"];
            
        }
        else
        {
        die("<br/>");
        }

    $waktu = date("h:i:s");
    $isi = "                Data Pemantaun Covid19 Wilayah " . $wilayah . "\n" .
        "                      Per " . $tgl . $month . $tahun . " " . $waktu . "\n" .
        "                       " . $operator . " / " . $nim . "\n\n" .
        "-------------------------------------------------\n" .
        "|  Positif |   Dirawat |   Sembuh  |   Meninggal  |\n" .
        "--------------------------------------------------\n" .
        "|  " . $positif . " |    " . $dirawat . "  |   " . $sembuh . " |   " . $meninggal . "      |  \n" .
        "---------------------------------------------------";

    $namafile = "data.txt";
    $file = fopen($namafile, "w");
    fwrite($file, $isi);
    fclose($file);
    ?>

    <h1> Hasil : <a href="<?php echo $namafile ?>"><?php echo $namafile; ?></a></h1>

    </body>
</html>