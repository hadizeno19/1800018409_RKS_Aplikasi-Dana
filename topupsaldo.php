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
 <form action="buktipembayaran.php" method="post" name="form1" target="_self">
<div class="leftcolumn">
<div class="card">
      <h2>ISI SALDO</h2>
<center><b> NOMOR REKENING : 085230013197 </b></center>
<p> Transfer Lewat ATM BNI : </br>
1. Masukan Kartu dan masukan PIN </br>
2. Pilin <b>MENU LAIN > TRANFER > DARI REKENING TABUNGAN > VIRTUAN ACCOUNT BILLING </b></br>
3. Masukan Nomor rekening : 085230013197</br>
4. Masukan jumlah top up yang ingin di bayar</br>
5. Konfirmasi Transaksi anda </br></p>

<p> Silakan Konfirmasi pembayaran di sini 
	    <input type="submit"  value="Konfirmasi pembayaran"> 
</p>
</div>
</div> 
</form>


	<div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
<center><div id="transaksi" cols="20" rows="15" class="span20" name="message" style="resize: vertical; height: 500px;"></div></center>
</div>
</div>