<?php

include_once("koneksi.php");
// memanggil file koneksi.php agar dapat terhubung antara database dan file

$hasil = mysqli_query
($mysqli, "SELECT * FROM tabel_user ORDER BY id DESC");

//hasil merupakan nama variabel yang memiliki nilai yaitu mysqli_query dimana mysqli query
//akan mengeksekusi perintah sql yaitu "SELECT * FROM user ORDER BY id DESC" user merupakan
//nama table yang ada di database.
?>

<html>
<head>
	<title>
		Homepage
	</title>
</head>
<body>
	<table width = '80%' border=1>
	<tr>
		<th>Nama</th><th>Mobile</th><th>Email</th>
	</tr>
	<?php

	while ($user_data = mysqli_fetch_array($hasil)) {
		echo "<tr>";
		echo "<td>".$user_data['nama']."</td>";
		echo "<td>".$user_data['mobile']."</td>";
		echo "<td>".$user_data['email']."</td>";
	}
	?>
</table>
</body>
</html>
