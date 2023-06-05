@extends('pages.layout')
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('/css/Table.css')}}">
    <title>Discover</title>
</head>
<body>
    <div class="Tables">
        <div class="table-content">
          <div class="game">
            @foreach($games as $item)
                <div class="content">
                  <a href="{{ url('/discover/' . $item->id) }}" class='GameCover'><img src="{{ $item->img_cover}}" alt='img' class='gameimage'></a>
                <div class='GameDesc'>
                  <a href="{{ url('/discover/' . $item->id) }}" class='Gametitle'>{{ $item->game_title }}</a>
                  <p>{{ $item->game_desc }}</p>
                  <p>{{ $item->price }}</p>
                </div>
              </div>
            @endforeach 
          </div>
        </div>
    </div>
</body>
</html>

@endsection