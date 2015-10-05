<html>
<head>
	<meta charset="UTF-8">
	<title>Perpus</title>
</head>
<body>

@if(Session::has('alert'))
        {!! Session::get('alert') !!}
@endif

<table border="1">
	<tr>
		<td>#</td>
		<td>Judul</td>
		<td>Pengarang</td>
		<td>Penerbit</td>
		<td>Tahun</td>
		<td>Kota</td>
		<td>Deskripsi</td>
		<td>#</td>
		<td>#</td>
	</tr>
	@foreach($perpus as $p)
	<tr>
		<td><a href="{{route('perpus.show',$p->id)}}">Lihat</a></td>
		<td>{{$p->judul}}</td>
		<td>{{$p->pengarang}}</td>
		<td>{{$p->penerbit}}</td>
		<td>{{$p->tahun}}</td>
		<td>{{$p->kota}}</td>
		<td>{{$p->deskripsi}}</td>
		<td><a href="{{route('perpus.edit')}}">ubah</a></td>
		<td>
			<form action="{{route('perpus.destroy',$p->id)}}" method="post">
			{!! csrf_field() !!}
			<input type="hidden" name="_method" value="delete">
			<input type="submit" value="hapus">
			</form>
		</td>
	</tr>
	@endforeach
</table>
	
</body>
</html>