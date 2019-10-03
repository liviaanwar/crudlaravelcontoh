<!DOCTYPE html>
<html>
<head>
	<title>Ngedit Mahasiswa</title>
</head>
<body>
 
	<h2>header</a></h2>
	<h3>Edit mahasiswa</h3>
 
	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($mahasiswa as $p)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->nim }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		Alamat <input type="text" required="required" name="alamat" value="{{ $p->alamat }}"> <br/>
		No TLP <input type="number" required="required" name="notlp" value="{{ $p->no_tlp }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>