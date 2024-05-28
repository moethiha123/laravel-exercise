@include('nav')
<h1>User Lists</h1>
<button>
    <a href="{{ route('users.create') }}">Create User</a>
</button>
<ul>
    @foreach ($userLists as $user)
        <li>{{ $user->name }}->{{ $user->email }}</li>
    @endforeach
</ul>
