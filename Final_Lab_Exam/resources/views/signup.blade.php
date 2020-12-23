<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
      <form method="post">
      	@csrf
      	UserId: <input type="text" name="uid"><br>
      	password: <input type="password" name="pass"><br>
      	Name: <input type="text" name="name"><br>
      	Company: <input type="text" name="cmp"><br>
      	contuct: <input type="text" name="contuct"><br>
      	<input type="submit" name="signup">
      </form>
      @foreach($errors->all() as $err)
	{{$err}}<br>
	@endforeach
</body>
</html>