@extends('admin.games.layout')
@section('content')
<div class="card">
  <div class="card-header">Game Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Title : {{ $games->game_title }}</h5>
        <p class="card-text">Description : {{ $games->game_desc }}</p>
        <p class="card-text">Price : {{ $games->price }}</p>
        <p class="card-text">Genre : {{ $games->genre_id }}</p>
        
  </div>
      
    </hr>
  
  </div>
</div>