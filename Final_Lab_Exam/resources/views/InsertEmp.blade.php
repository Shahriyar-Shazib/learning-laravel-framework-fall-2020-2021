<!DOCTYPE html>
<html>
<head>
	<title>Insert Emp</title>
</head>
<body>
	<a href="{{route('viewlogout')}}">logout</a>
      <form>
      	@csrf
      	UserId: <input type="text" name="uid"><br>
      	Name: <input type="text" name="name"><br>
      	Company: <input type="text" name="cmp"><br>
      	contuct: <input type="text" name="contuct"><br>
      	<input type="submit" name="insert">
      </form>
      @foreach($errors->all() as $err)
{{$err}}<br>
@endforeach
</body>
</html>