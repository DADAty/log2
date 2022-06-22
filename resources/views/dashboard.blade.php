<h2>Salut  {{ auth()->user()->name }}</h2>
<h1>ty</h1>

<form action="{{ route('logout') }}" methode="post">
    @csrf
    <button type="submit">Se connecter</button>
</form>
