<html>
 <head>
 	<title>latihan 1</title>
 </head>
 <body>
  <form action="{{route("form.store")}}" method="POST">
   {!! csrf_field() !!}
   judul<br>
   <input type="text" name="judul" ><br>
   isi<br>
   <textarea name="isi"></textarea><br>
   
   <button type="submit">submit</button>
  </form>
 </body>
</html>