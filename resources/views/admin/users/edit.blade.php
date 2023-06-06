@extends('admin.users.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('admin/users/' .$users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$users->email}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="password" id="password" value="{{$users->password}}" class="form-control"></br>
        <label>Role</label></br>
        <select name="role" id="role" class="form-select">
            <option value=0 >User</option>
            <option value=1 >Admin</option>
        </select></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop