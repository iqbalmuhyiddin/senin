<html>
<head>
	<meta charset="UTF-8">
	<title>Show - Perpus</title>
</head>
<body>
	<a href="{{URL::previous()}}">Kembali</a>
	<h1>{{$perpus->judul}}</h1><br>
	<b>{{$perpus->pengarang}}</b><br>
	<b>{{$perpus->penerbit}}</b><br>
	<b>{{$perpus->tahun}}</b><br>
	<b>{{$perpus->kota}}</b><br>
	<b>{{$perpus->deskripsi}}</b><br>
</body>
</html>