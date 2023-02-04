<html>
<head>
	<title>tambah event</title>
	<style>
        body {
            background-color: grey;
        }
    </style>
</head>

<body>
<h2 style="color: white;">|selamat datang di halaman pendaftaran|</h2>
<hr>

	<fieldset>
		<legend>tambah event</legend>
		<form action="proses_tambah_event.php" method="post" >

		<table>
			<tr>
				<td>Nama event:</td>
				<td><input type="text" name="nama" placeholder="masukkan event..." required></td>
			</tr>

            <tr>
				<td>tanggal event:</td>
				<td><input type="date" name="tanggal" title="masukkan tanggal " required></td>
			</tr>
            <tr>
				<td>informasi event:</td>
				<td><textarea name="informasi" style="width:645px; height:275px;" placeholder="masukkan informasi..." required></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
			
		</table>
		</fieldset>
		<br>
	<hr>
	<p> Copyright &copy SMK LUKMAN AL HAKIM KUDUS</p>
	</form>
</body>
</html>

