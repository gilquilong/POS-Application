<!doctype html><html><head><meta charset="utf-8"><title>{{ $customer->exists ? 'Edit' : 'Create' }} Customer</title></head><body>
<h1>{{ $customer->exists ? 'Edit' : 'Create' }} Customer</h1>
<form method="POST" action="{{ $customer->exists ? '/customers/'.$customer->id : '/customers' }}">@csrf @if($customer->exists) @method('PUT') @endif
<label>Full name <input name="full_name" value="{{ old('full_name',$customer->full_name) }}" required></label><br>
<label>Email <input type="email" name="email" value="{{ old('email',$customer->email) }}" required></label><br>
<label>Phone <input name="phone" value="{{ old('phone',$customer->phone) }}"></label><br><button type="submit">Save</button></form><a href="/customers">Back</a></body></html>
