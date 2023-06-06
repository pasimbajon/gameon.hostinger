@extends('admin.users.layout')
@section('content')
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">
      
      <form action="{{ url('/admin/users') }}" method="post">
        {!! csrf_field() !!}
        <label>Username</label></br>
        <input type="text" name="game_title" id="game_title" class="form-control"></br>
        <label>Email</label></br>
        <textarea class="form-control" name="game_desc" id="game_desc" style="height: 100px"></textarea>
        <label>Password</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>Role</label></br>
        <input type="text" name="img_cover" id="img_cover" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop