<!DOCTYPE html>
<html>
<head>
	<title>Employee list page</title>
</head>
<body>

	<h3>All User</h3>
	<a href="{{route('admin.home.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>USERNAME</td>
			<td>Contact</td>
            <td>password</td>
			<td>action</td>
            
		</tr>

		@for($i=0; $i < count($users); $i++)
		<tr>
			<td>{{$users[$i]['id']}}</td>
			<td>{{$users[$i]['name']}}</td>
			<td>{{$users[$i]['username']}}</td>
			<td>{{$users[$i]['contact']}}</td>
			<td>{{$users[$i]['pass']}}</td>
			<td>
				<a href="{{route('admin.home.edit', $users[$i]['id'])}}">Edit</a> |
				<a href="{{route('admin.home.delete', $users[$i]['id'])}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>