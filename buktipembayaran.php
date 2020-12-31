 <link rel="stylesheet" type="text/css" href="css/cssku.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/alert.css">
  <link rel="stylesheet" type="text/css" href="css/alert.css">
<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
input[type=submit]:hover {
  background-color: #45a049;

}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
<div class="leftcolumn">
<div class="card">
<html>
<title>Upload Bukti Pembayaran</title>	
<form name="form_upload" method="POST" action="upload.php" enctype="multipart/form-data">  
Gambar :  <input type="file" name="picture" />  
<br>
<input type="submit" name="upload" value="Upload" />  
</form>  
</html>
</div>
</div>