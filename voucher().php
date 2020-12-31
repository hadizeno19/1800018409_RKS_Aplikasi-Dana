 <link rel="stylesheet" type="text/css" href="css/cssku.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/alert.css">
  <link rel="stylesheet" type="text/css" href="css/alert.css">
  <div class="leftcolumn">
<div class="card">
<?php
$name    =$_POST['name'];
$menu    =$_POST['menu'];

if ($name == "")
{
echo "Data Nama Masih Kosong..";
}
else if ($menu == "")
{
echo "Data Masih Kosong";
}

else {
$tgl_isi =date('d-m-y');
$berkas =fopen("Transaksiv.txt","a");
fputs($berkas, "| Nama :  ".$name . "\n");
fputs($berkas, "| Transaksi : 50000 Voucher Steam| " . "\n");
fclose($berkas);

echo '==================== </br>
$name  Pembelian 50000 Voucher Steam <br/>
Silakan Bayar Di Rekening Tersebut 170001742 ( BNI ) </br>
Pesan telah tersimpan Di  (<a href="transaksi2.txt"> SINI </a>)
<br>=====================</br>
Sudah Bayar ? Upload Bukti Pembayaran Di Sini (<a href="buktipembayaran.php"> DI SINI </a>)</a>';
}
?>
</div>
</div>