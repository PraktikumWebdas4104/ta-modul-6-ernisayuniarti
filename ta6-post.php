<center>
<table border="1" width="550">
	<tr>
		<th width="100"><a href="ta6-halamanawal.php">Beranda</a></th>
		<th width="250"><a href="ta6-editprofil.php">Edit Profile</a></th>
		<th width="100"><a href="ta6-post.php">Post</a></th>
		<th width="250"><a href="ta6-daftarpost.php">Lihat Post</a></th>
		<th width="350"><a href="ta6-allpost.php">Lihat All Post</a></th>
		<th width="100"><a href="ta6-logout.php">Logout</a></th>
	</tr>
</table>
</center><br><br>

<form method="POST">
<center><h2>POSTING SESUATU</h2></center>
	<table>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="images"></td>
		</tr>
		<tr>
			<td>Cerita</td>
			<td>:</td>
			<td><textarea rows="20" cols="80" name="cerita"></textarea>
		</tr>

	</table>
	<br><br>

	<input type="submit" name="posting" value="posting"><br/>
	<a href="ta6-halamanawal.php"><input type="button" name="kembali" value="Kembali"></a><br/>
	<a href="ta6-daftarpost.php"><input type="button" name="lihat" value="Cek Post"></a>
</form>

<?php 
		if(isset($_POST['posting'])){
			session_start();
			error_reporting(0);
			$foto=$_FILES['foto']['images'];
			
			$cerita=$_POST['cerita'];
			$nim=$_SESSION['nim'];
			$nama=$_SESSION['nama'];
			$_SESSION['cerita']=$cerita;
			$_SESSION['foto']=$foto;

			$host="localhost";
			$user="root";
			$pass="";
			$db="posting";
			$conn=mysqli_connect($host,$user,$pass,$db);

			if(str_word_count($cerita)>=30){
			$sql=$conn->query("INSERT INTO `posting`(`nim`,`nama`,`foto`,`cerita`) VALUES ('$nim','$nama','$foto','$cerita')");
			move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
			echo "Cerita Berhasil diUpload"; 

			}else{
				echo "Maaf cerita minimal 30 kata, silahkan isi cerita kembali";
			}
		}
?>