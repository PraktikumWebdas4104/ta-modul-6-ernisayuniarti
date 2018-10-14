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

<?php 
	session_start();

	echo "<center>";
	echo $_SESSION['nama']."<br>";
	echo "Berikut profil anda :"."<br>";
	echo "Nama :".$_SESSION['nama']."<br>";
	echo "Nim :".$_SESSION['nim']."<br>";
	echo "Kelas :".$_SESSION['kelas']."<br>";
	echo "Jenis Kelamin :".$_SESSION['jeniskelamin']."<br>";
	echo "Hobi :".$_SESSION['hobi']."<br>";
	echo "Fakultas :".$_SESSION['fakultas']."<br>";
	echo "Alamat :".$_SESSION['alamat']."<br>";
	echo "Password :".$_SESSION['password']."<br>";
	echo "</center>";
		
	
 ?>