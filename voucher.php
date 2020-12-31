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
  <form action="voucher().php" method="post" name="form1" target="_self">
      <h2>Voucher Steam</h2>
    <label for="fname">Nama Pembeli</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="country">Menu</label>
    <select id="menu" name="menu">
      <option value="1" id="1">50000 Voucher</option>
      <option value="2" id="2">100000 Voucher</option>
    </select>
  
    <input type="submit" value="beli">
  </form>
</div>
    </div>
  </div>


	<div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
<center><textarea id="transaksi" cols="35" rows="22" class="span20" name="message" style="resize: vertical; height: 500px;"></textarea></center>
</div>
</div>