<html>
<head>
	<title>Tambah Mahasiswa</title>
</head>
<body>
 
	<h2>header</a></h2>
	<h3>Data Mahasiswa</h3>
 
	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/mahasiswa/store" method="POST">
		{{ csrf_field() }}
		NIM <input type="text" name="nim" required="required"> <br/>
		Nama <input type="text" name="nama" required="required"> <br/>
		Alamat <input type="text" name="alamat" required="required"></textarea> <br/>
		No_tlp <input type="number" name="notlp" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>