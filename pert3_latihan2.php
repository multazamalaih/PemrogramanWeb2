<html>
    <head>
        <title>contoh Penggunaan IF</title>
    </head>
    <body>
        <?php
			if(isset($_POST['total_beli']))
			{
				$totalBeli = $_POST['total_beli'];
				$diskon = 0;
				if($totalBeli >= 200000)
				{
					$diskon = 0.1;
					$nominalDiskon = $diskon * $totalBeli;
                    $totalBayar = $totalBeli - $nominalDiskon;
				}
				else if($totalBeli >= 100000)
				{
					$diskon = 0.05;
					$nominalDiskon = $diskon * $totalBeli;
                    $totalBayar = $totalBeli - $nominalDiskon;
				}
				else
				{
					$diskon = 0.01;
					$nominalDiskon = $diskon * $totalBeli;
                    $totalBayar = $totalBeli - $nominalDiskon;
				}
			}
			?>
            <form action="" method="post"> 
                Besar Pembelian :
                <input type=text name=total_beli><br><br>
                <input type=submit value="Tentukan Diskon">
                </form>
                Total Harga Barang = Rp. <?php echo @$totalBeli;?>
                <br>
                Besar Diskon = <?php echo @$diskon;?> 
                <br>
                Nominal Potongan = Rp. <?php echo @$nominalDiskon;?>
                <br>
                Total Pembayaran = Rp. <?php echo @$totalBayar;?>
    </body>
</html>