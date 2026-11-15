<!doctype html><html><head><meta charset="utf-8"><title>Users</title></head><body>
<h1>POS Users</h1><nav><a href="/customers">Customers</a> | <a href="/users">Users</a></nav>
<table border="1" cellpadding="8"><tr><th>Username</th><th>Full name</th></tr>
@foreach ($users as $user)<tr><td>{{ $user->username }}</td><td>{{ $user->full_name }}</td></tr>@endforeach
</table></body></html>
