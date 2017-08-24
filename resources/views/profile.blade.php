<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<link rel="stylesheet" href="">
</head>
<body>
		<h1>{{$decode['name']}}</h1>

		<form method="POST" action="{{ route('get-repo') }}">
			{{csrf_field()}}
			<input type="hidden" name="username" value="{{$decode['login']}}">

			<button class="btn-btn-primary">User Public Repos</button>

		</form>
</body>
</html>
