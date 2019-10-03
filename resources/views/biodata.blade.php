<html>
<head><title>Passing data </title></head>
<body>

<h3>PASSING DATA</h3>
	<p>Seri Tutorial Laravel Lengkap Dari Dasar</p>
	<p>{{$nama}}</p>
	<p>Hobi</p>
    <ul>
        @foreach($kesukaan as $a)
        <li>{{$a}}</li>
        @endforeach
    </ul>

</body>
</html>