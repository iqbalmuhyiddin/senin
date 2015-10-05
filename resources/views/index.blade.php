<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
{{route('form.edit',1)}}
	<table border="1">
		<tr>
			<td>Judul</td>
			<td>Isi</td>
			<td>#</td>
			<td>#</td>
		</tr>
		@foreach($post as $p)
		<tr>
			<td>{{$p->judul}}</td>
			<td>{{$p->isi}}</td>
			<td><a href="{{route('form.update',$p->id)}}">Ubah</a></td>
			<td>
				<form action="{{route('form.delete',$p->id)}}" method="POST">
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