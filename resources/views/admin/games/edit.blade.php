@extends('admin.games.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('admin/games/' .$games->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$games->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" name="game_title" id="game_title" value="{{$games->game_title}}" class="form-control"></br>
        <label>Description</label></br>
        <textarea class="form-control" name="game_desc" id="game_desc" rows="4" cols="50" >
<?php echo $games->game_desc?>
        </textarea>
        <label>Price</label></br>
        <input type="text" name="price" id="price" value="{{$games->price}}" class="form-control"></br>
        <select name="genre_id" id="genre_id" class="form-select">
            <option value=1 >Action</option>
            <option value=2 >Adventure</option>
            <option value=3 >Fighting</option>
            <option value=4 >Platform</option>
            <option value=5 >Puzzle</option>
            <option value=6 >Racing</option>
            <option value=7 >Role-Playing</option>
            <option value=8 >Shooter</option>
            <option value=9 >Simulation</option>
            <option value=10 >Sports</option>
            <option value=11 >Strategy</option>
        </select></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop