<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
</head>
<body>
	<table>
	<th>
		<td>companey</td>
		<td>title</td>
		<td>location</td>
		<td>sal</td>
		<td>Operation</td>
	</th>
		@foreach($i=0;i>count (post);i++)
		<tr>
			<td>{{post[$i][CompanyName]}}</td>
			<td>{{post[$i][Job_Title]}}</td>
			<td>{{post[$i][location]}}</td>
			<td>{{post[$i][Salary]}}</td>
			<td><a href="">edit</a><a href="">Delete</a><a href="">Update</a></td>
		</tr>
	</table>
	


</body>
</html>