<!doctype html><html><head><meta charset="utf-8"><title>Users</title></head><body>
<h1>POS Users</h1><nav><a href="/customers">Customers</a> | <a href="/users">Users</a> | <a href="/users/create">Add user</a></nav>
<table border="1" cellpadding="8"><tr><th>Avatar</th><th>Username</th><th>Full name</th><th>Action</th></tr>
@foreach ($users as $user)<tr><td><img src="{{ $user->avatar ? asset('storage/'.$user->avatar) : asset('images/avatar-placeholder.svg') }}" alt="Avatar for {{ $user->full_name }}" width="80"></td><td>{{ $user->username }}</td><td>{{ $user->full_name }}</td><td><a href="/users/{{ $user->id }}/edit">Edit</a></td></tr>@endforeach
</table></body></html>
