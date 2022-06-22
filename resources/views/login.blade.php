<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form action="{{ route('auth')}}"></form>
    @csrf
    <input type="mail" name="email"></input>
    <input type="password" name="password"></input>
</body>
</html>