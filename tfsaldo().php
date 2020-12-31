  <link rel="stylesheet" type="text/css" href="css/cssku.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/alert.css">
  <link rel="stylesheet" type="text/css" href="css/alert.css">
  <div class="leftcolumn">
<div class="card">
<?php
$name    =$_POST['name'];
$saldo    =$_POST['saldo'];
$menu    =$_POST['menu'];

if ($name == "")
{
echo "Data Nama Masih Kosong..";
}
else if ($saldo == "")
{
echo "Data Masih Kosong";
}
else if ($menu == "")
{
echo "Data Masih Kosong";
}

else {
$tgl_isi =date('d-m-y');
$berkas =fopen("hasiltfsaldo.txt","a");
fputs($berkas, "| Nama :  ".$name . "\n");
fputs($berkas, "| Jumlah Saldo :  ".$saldo . "\n");
fputs($berkas, "| Bank Tujuan : " .$menu . "\n");
fputs($berkas, "-------------------------- " . "\n");
fclose($berkas);

echo '<center>==================== </br>
Terima kasih sudah melakukan transfer saldo ke : </br>
Nama 			: '.$name .' </br>
Jumlah saldo 	: '.$saldo . '</br>
Bank Tujuan		: '.$menu . '</br>
Hasil Transfer saldo telah tersimpan Di  (<a href="hasiltfsaldo.txt"> SINI </a>)
<br>=====================</br></center>';
}
?>
</div>
</div>