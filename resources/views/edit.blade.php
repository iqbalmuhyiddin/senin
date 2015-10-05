<html>
 <head>
 	<title>latihan 1</title>
 </head>
 <body>
 
  <form action="{{route("form.update",$post->id)}}" method="POST">
   {!! csrf_field() !!}
   <input type="hidden" name="_method" value="put">
   judul<br>
   <input type="text" name="judul" value="{{$post->judul}}" ><br>
   isi<br>
   <textarea name="isi">{{$post->isi}}</textarea><br>
   
   <button type="submit">submit</button>
  </form>
 </body>
</html>