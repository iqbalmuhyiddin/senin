<html>
<head>
	<meta charset="UTF-8">
	<title>Ubah Perpus</title>
</head>
<body>
	<form action="{{route('perpus.update')}}" method="post">
		{!! csrf_field() !!}
		<input type="hidden" name="_method" value="put">
		Judul<br><input type="text" name="judul" value="{{$perpus->judul}}"><br>
		Pengarang <br> <input type="text" name="pengarang" value="{{$perpus->pengarang}}"><br>
		Penerbit <br> <input type="text" name="penerbit" value="{{$perpus->penerbit}}"> <br>
		Tahun <br> <input type="text" name="tahun" value="{{$perpus->tahun}}"><br>
		Kota <br> <input type="text" name="kota" value="{{$perpus->kota}}"><br>
		Deskripsi <br> <textarea name="deskripsi"  cols="30" rows="10">{{$perpus->deskripsi}}</textarea>
		<input type="submit" value="tambah">
	</form>
	
</body>
</html>