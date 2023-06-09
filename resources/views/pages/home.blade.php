@extends('pages.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="{{url('/css/Grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/Hero.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/slick-theme.css')}}">
    <title>Document</title>
</head>
<body>
    <div class='Hero-Section'>
        <div class='Hero-Image'>
        <img alt='hero-Images' src="{{url('/images/hero-image.jpg')}}">
            <div class='Hero-Text'>
                <p class='herotext'>LET'S <br><span id='game'>GAME</span>-<span id='on'>ON</span></p>
            </div>
        </div>
    </div>


    <div class="Contain">
      <div class="Carousel">
        <h2> Featured </h2>
        <div class="home-carousel">
          @foreach($games as $item)
          <div class="image-item">
            <a href="/discover/{{$item->id}}">
              <img
                src="{{url($item->img_cover)}}"
                alt="img"
              >
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  <div class='container'>
    <div class="row gy-5 mt-4 mb-4">
      @foreach($games as $item)
      <div class="col-sm-4">
        <div class="card border-0">
          <a href="{{ url('/store/' . $item->id) }}"><img src="{{$item->img_cover}}" class="card-img-top object-fit-cover mh-100" style="height:200px; alt="..."></a>
          <div class="card-body bg-dark">
            <p class="card-text text-light">{{$item->price}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
        {{-- <div class='Grid-Selection'>
            <div class='grid-item'>
            <a class='grid-images' to="/discover/destiny_2">
              <img alt='img' src="{{url('/images/GAMES/DESTINY 2/DESTINY2_Cover.jpg')}}" />
              <div class='item-desc'>
                <h2>Destiny 2</h2>
              </div></a>
            </div>
            <div class='grid-item'>
              <a class='grid-images' to="/discover/sons_of_the_forest"><img src="{{url('/images/GAMES/SONS OF THE FOREST/SOTF_Cover.avif')}}" alt='img'>
              <div class='item-desc'>
                <h2>Sons Of The Forest</h2>
              </div></a>
            </div>
            <div class='grid-item'>
            <a class='grid-images' to="/discover/ea_sports_fifa_23"><img src="{{url('/images/GAMES/EA SPORTS FIFA 23/FIFA_Cover.jpg')}}" alt='img'>
              <div class='item-desc'>
                <h2>EA Sports FIFA 23</h2>
              </div></a>
            </div>
            <div class='grid-item'>
            <a class='grid-images' to="/discover/monster_hunter_rise"><img src="{{url('/images/GAMES/MONSTER HUNTER RISE/MHR_Cover.jpg')}}" alt='img'>
              <div class='item-desc'>
                <h2>Monster Hunter Sunbreak</h2>
              </div></a>
            </div>
            <div class='grid-item'>
            <a class='grid-images' to="/discover/rust"><img src="{{url('/images/GAMES/RUST/RUST_Cover.jpg')}}" alt='img'>
              <div class='item-desc'>
                <h2>Rust</h2>
              </div></a>
            </div>
            <div class='grid-item'>
            <a class='grid-images' to="/discover/star_wars_jedi_survivor"><img src="{{url('/images/GAMES/STAR WARS JEDI SURVIVOR/SWJS_Cover.jpg')}}" alt='img'>
              <div class='item-desc'>
                <h2>STAR WARS Jedi: Survivor™</h2>
              </div></a>
            </div>
            <div class='grid-item'>
            <a class='grid-images' to="/discover/war_thunder"><img src="{{url('/images/GAMES/WAR THUNDER/WT_Cover.jpg')}}" alt='img'>
              <div class='item-desc'>
                <h2>War Thunder</h2>
              </div></a>
              </div>
            <div class='grid-item'>
            <a class='grid-images' to="/discover/counter-strike_global_offensive"><img src="{{url('/images/GAMES/COUNTER-STRIKE GLOBAL OFFENSIVE/CSGO_Cover.png')}}" alt='img'>
              <div class='item-desc'>
                <h2>Counter-Strike: Global Offensive</h2>
              </div></a>
              </div>
            <div class='grid-item'>
              <a class='grid-images' to="/discover/team_fortress_2"><img src="{{url('/images/GAMES/TEAM FORTRESS 2/TF_Cover.jpg')}}" alt='img'>
              <div class='item-desc'>
                <h2>Team Fortress 2</h2>
              </div></a>
            </div>
        </div> --}}
    </div>
</body>
</html>
    
@endsection