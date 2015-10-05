<html>
<head>
	<meta charset="UTF-8">
	<title>Tambah - Perpus</title>
</head>
<body>
	<form action="{{route('perpus.store')}}" method="post">
		{!! csrf_field() !!}
		Judul<br><input type="text" name="judul"><br>
		Pengarang <br> <input type="text" name="pengarang"><br>
		Penerbit <br> <input type="text" name="penerbit"><br>
		Tahun <br> <input type="text" name="tahun"><br>
		Kota <br> <input type="text" name="kota"><br>
		Deskripsi <br> <textarea name="deskripsi"  cols="30" rows="10"></textarea>
		<input type="submit" value="tambah">
	</form>
</body>
</html>