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

<table border="1">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Foto</th>
		<th>Postingan</th>
	</tr>

<?php 
	session_start();

	$host="localhost";
	$user="root";
	$pass="";
	$db="posting";
	$conn=mysqli_connect($host,$user,$pass,$db);

	$nim=$_SESSION['nim'];

	$sql=$conn->query("SELECT `nim`,`nama`,`foto`,`cerita` FROM `posting` WHERE `nim`='$nim'");

	$no=1;
		while($row=mysqli_fetch_array($sql)){
		
		echo"<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
				<td><a href='ta6-editpost.php'>Edit Disini</a></td>
			</tr>";
			$no++;			
		}
?>

</table>