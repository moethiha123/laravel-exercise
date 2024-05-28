<h1>Create User</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    </ul>

@endif
<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" value="{{ old('name') }}" placeholder="name" name="name">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="email" placeholder="email" name="email">
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="password" placeholder="password" name="password">
    @error('password')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Create User"><br>
</form>
