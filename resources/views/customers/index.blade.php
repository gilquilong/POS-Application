<!doctype html><html><head><meta charset="utf-8"><title>Customers</title></head><body>
<h1>Customers</h1><nav><a href="/customers">Customers</a> | <a href="/users">Users</a> | <a href="/customers/create">Add customer</a></nav>
@if(session('success'))<p>{{ session('success') }}</p>@endif
@if($errors->any())<ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>@endif
<table border="1" cellpadding="8"><tr><th>Full name</th><th>Email</th><th>Phone</th></tr>
@foreach ($customers as $customer)<tr><td>{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone }}</td><td><a href="/customers/{{ $customer->id }}/edit">Edit</a></td></tr>@endforeach
</table></body></html>
