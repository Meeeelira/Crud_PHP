<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dan dikirim melalui link (get) -->
<?php
$nim=$_GET['nim'];
//membuat sql tampil data
$sqldata="SELECT * FROM mahasiswa WHERE nim='$nim'";
//ambil koneksi data
require_once "DB.php";
//proses sql
$query=mysqli_query($koneksi,$sqldata);
//mengubah data ke array asosiatif, tidak menggunakan perulangan karena datanya hanya 1.
$data=mysqli_fetch_assoc($query);
//selanjutnya tampilkan pada field dibawah.
?>
<h2>Update Data Mahasiswa</h2>
<!-- tag form -->

<form action="Update.php" method="POST">
nim : <br>
<input type="text" name="nim" id="">
<br>
nama : <br>
<input type="text" name="nama" id="">
<br>
alamat : <br>
<input type="text" name="alamat" id="">
<br>
jkl : <br>
<select name="jkl" id="">
<option value="pria">pria</option>
<option value="wanita">wanita</option>
</select>
<br>
agama : <br>
<select name="agama" id="">
<option value="islam">islam</option>
<option value="kristen">kristen</option>
</select>
<br>
email : <br>
<input type="text" name="email" id="">
<br>
pwd : <br>
<input type="text" name="pwd" id="">
<br>
<button type="submit">Simpan mahasiswa</button>
</form>
