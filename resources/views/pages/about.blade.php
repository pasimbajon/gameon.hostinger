@extends('pages.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('/css/About.css')}}">
    <title>About us</title>
</head>
<body>
    <div class='About-Content'>
        <div class='about'>
          <div class='about-gameon'>
            <div class='about-paragraph'>
              <h1>What is Game-On</h1>
              <p>Game-On sells games. Our mission is to support charity while providing 
              awesome content to customers at great prices. We launched in 2023 with a single two-week 
              Game-On Indie, but we have humbly grown into a store full of games and bundles, a gaming 
              membership service, and more.</p>
            </div>
            <div class='what-img'><img class='logo' src="{{url('/images/LOGO/arcade-machine.png')}}" alt='logo'></div>
          </div>
          <div class='partners'>
            <h1>We are Partners with</h1>
            <img class='logo' src="{{url('/images/Partners.png')}}" alt='logo'>
          </div>
        </div>
        
      </div>
</body>
</html>
    
@endsection