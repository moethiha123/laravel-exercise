@include('nav')
<h1>User Lists</h1>
<button>
    <a href="{{ route('users.create') }}">Create User</a>
</button>
<div>
    @if (session('message'))
        {{ session('message') }}
    @endif
</div>
<ul>


    <ul>
        @foreach ($userLists as $user)
            <li> {{ $user->name }} -> ({{ $user->email }}) <form action="{{ route('users.destroy', $user->id) }}"
                    method="post">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</ul>
