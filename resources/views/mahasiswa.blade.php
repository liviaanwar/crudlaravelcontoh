<html>
<head>
	<title>Olah Mahasiswa</title>
</head>
<body>
 
	<h2>header</h2>
	<h2>header 3</h2>
	<h3>Data Mahasiswa</h3>
 
	<a href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Telepon</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $p)
		<tr>
			<td>{{ $p->nim }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->alamat }}</td>
			<td>{{ $p->no_tlp }}</td>
			<td>
				<a href="/mahasiswa/edit/{{ $p->nim }}">Edit</a>
				|
				<a href="/mahasiswa/hapus/{{ $p->nim }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>