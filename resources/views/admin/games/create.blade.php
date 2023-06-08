@extends('admin.games.layout')
@section('content')
<div class="card">
  <div class="card-header">Game Page</div>
  <div class="card-body">
      
      <form action="{{ url('/admin/games') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="game_title" id="game_title" class="form-control"></br>
        <label>Description</label></br>
        <textarea class="form-control" name="game_desc" id="game_desc" style="height: 100px"></textarea>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <img id="img_cover_preview" class="w-25"></br>
        <label for="img_cover">Image Cover</label></br>
        <input type="file" name="img_cover" id="img_cover" class="form-control"></br>
        <label>Genre</label></br>
        <select name="genre_id" id="genre_id" class="form-select">
            <option value=1>Action</option>
            <option value=2>Adventure</option>
            <option value=3>Fighting</option>
            <option value=4>Platform</option>
            <option value=5>Puzzle</option>
            <option value=6>Racing</option>
            <option value=7>Role-Playing</option>
            <option value=8>Shooter</option>
            <option value=9>Simulation</option>
            <option value=10>Sports</option>
            <option value=11>Strategy</option>
        </select></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<script>
  document.getElementById('img_cover').onchange = function(evt) {
    const [file] = this.files
    if (file) {
      document.getElementById('img_cover_preview').src = URL.createObjectURL(file)
    }
  }
</script>
@stop