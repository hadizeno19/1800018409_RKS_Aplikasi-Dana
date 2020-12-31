 <link rel="stylesheet" type="text/css" href="css/cssku.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/alert.css">
  <link rel="stylesheet" type="text/css" href="css/alert.css">
  <div class="leftcolumn">
<div class="card">
<?php  
$namafile = $_FILES['picture']['name'];  
$ukuran = $_FILES['picture']['size'];  
$error = $_FILES['picture']['error'];  
 
// bila ukuran file lebih besar dari 0 dan tidak ada error
if($ukuran > 0 || $error == 0)
{  
// pindahkan file gambar dari temporary folder ke folder gambar	
$move = move_uploaded_file($_FILES['picture']['tmp_name'], 'gambar/'.$namafile);  
if($move){  
// pesan bila gambar berhasil di upload	
echo '<br><img src="gambar/'.$namafile.'" width="300" />
<br>Terima kasih Telah Upload Bukti Pmebayaran
<br> Di tunggu konfirmasi dari admin </br>
Klik <a href="http://localhost/prak/" get="home">Di sini </a> untuk kembali ke HOME';  
}
else 
{  
echo "Terjadi kesalahan sewaktu mengupload file";  
}  
}
else
{  
echo "File gagal diupload karena : ".$error;  
}  
?>
</div>
</div>