@extends('admin.users.layout')
@section('content')
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">
      
      <form action="{{ url('/admin/users') }}" method="post">
        {!! csrf_field() !!}
        <label>Username</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input class="form-control" name="email" id="email">
        <label>Password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <label>Role</label></br>
        <select name="role" id="role" class="form-select">
          <option value=0 >User</option>
          <option value=1 >Admin</option>
        </select></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop