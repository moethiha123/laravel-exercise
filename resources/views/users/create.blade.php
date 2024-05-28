<h1>Create User</h1>
<form action="{{ route('users.store') }}" method="post">
    <input type="text" placeholder="name" name="name"><br>
    <input type="email" placeholder="email" name="email"><br>
    <input type="password" placeholder="password" name="password"><br>
    <input type="submit" value="Create User"><br>
</form>
