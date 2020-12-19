<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('admin.home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
	
		<form method="post">

			@csrf
			<fieldset>
				<legend>Edit Employee</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname" value="{{$users['username']}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass" value="{{$users['pass']}}"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{$users['name']}}"></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><input type="text" name="contact" value="{{$users['contact']}}"></td>
				</tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>