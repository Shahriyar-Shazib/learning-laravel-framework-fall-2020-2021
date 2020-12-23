<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<fieldset>
	<form method="post">
		@csrf
		UserID:<input type="text" name="userId" placeholder="USerid"><br>
		Password:<input type="password" name="pass" placeholder="Password"><br>
		<input type="submit" name="submit" value="Login">
	</form>
</fieldset>
@foreach($errors->all() as $err)
{{$err}}<br>
@endforeach
</body>
</html>