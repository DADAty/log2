<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    @foreach ($errors->all() as $error)
    {{ $error }}
    @endforeach
    <form action="{{ route('auth')}}" methode="post">
    @csrf
    <input type="mail" name="email"></input>
    <input type="password" name="password"></input>
    <button type="submit">Se connecter</button>
</form>
</body>
</html>