<form action="#" method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
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
				<option value="fit">FIT</option>
				<option value="fte">FTE</option>
				<option value="fkb">FKB</option>
				<option value="fif">FIF</option>
			</select></td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>:</td>
			<td><input type="text" name="password"></td>
		</tr>

		<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="Registrasi"></td>
		</tr>
	</table>
</form>

<?php 
	if (isset($_POST['submit'])) {
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
		$sql=$conn->query("INSERT INTO `pendaftaran`(`nama`,`nim`,`kelas`,`jeniskelamin`,`hobi`,`fakultas`,`alamat`,`password`) VALUES ('$nama','$nim','$kelas','$jeniskelamin','$hobi','$fakultas','$alamat','$password')");
		echo "BERHASIL MASUKIN DATA"."<br/>";
		echo "<a href='login.php'>KLIK DISINI</a>";
	}
?>