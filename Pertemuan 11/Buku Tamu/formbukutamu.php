<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Buku Tamu - Multazam </title>
    </head>
    <body>
    <form method="POST"  action="insertbukutamu.php">
        <table align="center" border="1" cellpadding="0" cellspacing="0"> 
            <tr align="center"><td><h2> <b> INPUT BUKU TAMU </b></h2></td></tr>
            <tr> 
                <td> 
                <table width="650" border="0" cellpadding="0" cellspacing="10" align="center"> 
                    <tr> 
                        <td>Nama</td> 
                        <td> : </td>
                        <td><input name="nama" type="text" size="30" /></td> 
                        </tr> 
                    <tr> 
                        <td>Alamat</td> 
                        <td> : </td>
                        <td><input name="alamat" type="text" size="30" /></td> 
                        </tr> 
                    <tr> 
                        <td>No. Telepon</td> 
                        <td> : </td>
                        <td><input name="telp" type="text" size="30" /></td> 
                        </tr> 
                    <tr> 
                        <td>Pesan</td> 
                        <td> : </td>
                        <td><textarea name="pesan" type="text" rows="6" cols="30" ></textarea></td> 
                        </tr>
                    <tr> 
                        <td colspan="4" align="center">
                        <input type="submit" value="Simpan" />
                        <input type="reset" value="Reset"/>
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