<!doctype html><html><head><meta charset="utf-8"><title>{{ $user->exists ? 'Edit' : 'Create' }} User</title></head><body>
<h1>{{ $user->exists ? 'Edit' : 'Create' }} User</h1>
<form method="POST" enctype="multipart/form-data" action="{{ $user->exists ? '/users/'.$user->id : '/users' }}">@csrf @if($user->exists) @method('PUT') @endif
<label>Username <input name="username" value="{{ old('username',$user->username) }}" required></label><br>
<label>Full name <input name="full_name" value="{{ old('full_name',$user->full_name) }}" required></label><br>
@if($user->exists)<label>Profile picture <input type="file" name="avatar" accept="image/*"></label><br>@endif
<button type="submit">Save</button></form><a href="/users">Back</a></body></html>
