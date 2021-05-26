<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
        table{
            width: 840px;
            margin: auto;
        }
        h1{
            text-align: center;
        }
        </style>
    </head>
  <body>
    <h1>Daftar Tamu</h1>
    <br/>
        <?php
            $link = mysqli_connect("localhost", "root", "");
            mysqli_select_db($link, "bukutamu");
            $sql = "SELECT * FROM daftartamu";
            $result = mysqli_query($link, $sql) or die(mysqli_error($link));
            if (mysqli_num_rows($result)) {
                echo '
                <table border="1">
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>NO TELP</th>
                        <th>ISI PESAN</th>
                    </tr>';
                $no = 1;
                    if($no>5){
                        echo '';
                    }else{
                        while ($row = $result->fetch_assoc()) {
                            echo '
                            <tr>
                                <td>' . $no++ . '</td>
                                <td>' . $row['nama'] . '</td>
                                <td>' . $row['alamat'] . '</td>
                                <td>' . $row['telp'] . '</td>
                                <td>' . $row['pesan'] . '</td>
                            </tr>
                                                
                            ';
                            }
                    }
                    
                } else {
                    echo 'Belum ada data buku tamu';
                }
		?>
        <tr>
            <td colspan="5" align="center">
                <button><a href="formbukutamu.php">Form Buku Tamu</a></button>
                <button><a href="daftartamu.php">Buka Daftar Tamu Sebelumnya</a></button>
                <button><a href="daftartamuselanjutnya.php">Buka Daftar Tamu Selanjutnya</a></button>
            </td>
            </tr>
         </table>
  </body>
</html>