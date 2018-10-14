<?php 
	session_start();
?>
<center>
<table border="1" width="550">
	<tr>
		<th width="100"><a href="ta6-halamanawal.php">Beranda</a></th>
		<th width="250"><a href="ta6-editprofil.php">Edit Profile</a></th>
		<th width="100"><a href="ta6-post.php">Post</a></th>
		<th width="250"><a href="ta6-daftarpost.php">Lihat Post</a></th>
		<th width="350"><a href="ta6-allpost.php">Lihat All Post</a></th>
		<th width="100"><a href="ta6-logout.php">Logoutr</a></th>
	</tr>
</table>
</center><br><br>

<form method="POST">
	<center><h3>Edit Profile</h3></center><br><br>
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10" value="<?php echo $_SESSION['nim'];?>"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $_SESSION['nama'];?>"></td>
		</tr>
		<tr>
			<td>KELAS</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="MI04">MI04<br/>
				<input type="radio" name="kelas" value="MI03">MI03<br/>
				<input type="radio" name="kelas" value="MI02">MI02<br/>
				<input type="radio" name="kelas" value="MI01">MI01<br/>
			</td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="lakilaki">Laki-Laki<br/>
				<input type="radio" name="jeniskelamin" value="perempuan">Perempuan<br/>
			</td>
		</tr>
		<tr>
			<td>HOBI</td>
			<td>:</td>
				<td><input type="checkbox" name="hobi" value="berenang">Berenang<br/>
				<input type="checkbox" name="hobi" value="hiking">Hiking<br/>
				<input type="checkbox" name="hobi" value="diving">Diving<br/>
				<input type="checkbox" name="hobi" value="mancing">Mancing<br/>
				<input type="checkbox" name="hobi" value="nonton film">Nonton Film<br/></td>
		</tr>
		<tr>
			<td>FAKULTAS</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="fit" <?php if($_SESSION['fakultas']=='fit'){echo'selected';}?>>FIT</option>
				<option value="fte" <?php if($_SESSION['fakultas']=='fte'){echo'selected';}?>>FTE</option>
				<option value="fkb" <?php if($_SESSION['fakultas']=='fkb'){echo'selected';}?>>FKB</option>
				<option value="fif" <?php if($_SESSION['fakultas']=='fif'){echo'selected';}?>>FIF</option>
			</select></td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td>:</td>
			<td><textarea name="alamat" value="<?php echo $_SESSION['alamat'];?>"></textarea></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>:</td>
			<td><input type="text" name="password" value="<?php echo $_SESSION['password'];?>"></td>
		</tr>
	</table>
	<br>
	<input type="submit" name="update" value="update"> &nbsp;&nbsp; <a href="halamanawal.php"> <input type="button" name="kembali" value="Kembali"></a>
	
</form>
<?php 

	if(isset($_POST['update'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$kelas=$_POST['kelas'];
		$jeniskelamin=$_POST['jeniskelamin'];
		$hobi=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
		$password=$_POST['password'];

		$host="localhost";
		$user="root";
		$pass="";
		$db="pendaftaran_db";
		$conn=mysqli_connect($host,$user,$pass,$db);

		$sql=$conn->query("UPDATE `pendaftaran` SET `nama`='$nama',`nim`='$nim',`kelas`='$kelas',`jeniskelamin`='$jeniskelamin',`hobi`='$hobi',`fakultas`='$fakultas',`alamat`='$alamat', `password`='$password',");
		echo "data berhasil diupdate";

	}


 ?>