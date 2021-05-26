<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Buku Tamu - Multazam </title>
</head>

<body>
    <form method="POST" action="insertbukutamu.php">
        <table align="center" border="1" cellpadding="0" cellspacing="0">
            <tr align="center">
                <td>
                    <h2> <b> INPUT BUKU TAMU </b></h2>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="650" border="0" cellpadding="0" cellspacing="10" align="center">
                        <tr>
                            <td>
                                <center>
                                    <?php
                            $con = mysqli_connect("localhost","root","");
                            if (!$con)
                            {
                            die('Could not connect: ' . mysqli_error($con));
                            }
                            mysqli_select_db($con,"bukutamu");
                            $sql="INSERT INTO daftartamu (nama,alamat,telp,pesan) 
                            VALUES
                            ('$_POST[nama]','$_POST[alamat]','$_POST[telp]','$_POST[pesan]')";
                            if (!mysqli_query($con, $sql))
                            {
                            die('Error: ' . mysqli_error($con));
                            }
                            echo "Data tersimpan";
                            mysqli_close($con);
                        ?>
                                </center>
                            </td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td colspan="4" align="center">
                                <button><a href="formbukutamu.php">Form Buku Tamu</a></button>
                                <button><a href="daftartamu.php">Buka Daftar Tamu</a></button>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>