<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('/css/Footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/NavBar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/Carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/SearchResult.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/SearchResultList.css')}}">
    <link rel="icon" type="image/x-icon" href="{{url('/images/LOGO/arcade-machine.png')}}">

    @yield("custom-css")
    <title>Game-on</title>
</head>
<body>
    <!-- Nav -->
     @include('pages.navbar')
    <div class="main-content">
        @yield('content')
    </div>
    <div class='Footer'>
        <div class='Footer-Content'>
          <div class='Trending'>
            <h3>Trending</h3>
            <div class='game-links'>
              <a href="/discover/counter-strike_global_offensive" class='link'>Counter-Strike: Global Offensive</a>
              <a href="/discover/dota_2" class='link'>DOTA 2</a>
              <a href="/discover/apex_legends" class='link'>Apex Legends</a>
              <a href="/discover/pubg_battlegrounds" class='link'>PUBG: BATTLEGROUNDS</a>
              <a href="/discover/grand_theft_auto_V" class='link'>Grand Theft Auto V</a>
              <a href="/discover/rust" class='link'>Rust</a>
              <a href="/discover/war_thunder" class='link'>War Thunder</a>
              <a href="/discover/team_fortress_2" class='link'>Team Fortress 2</a>
            </div>
          </div>
          <div class='Contacts'>
            <div class='contact-icons'>
              <img class='logo' src="{{url('/images/ICONS/facebook.png')}}" alt='logo'>
              <img class='logo' src="{{url('/images/ICONS/instagram.png')}}" alt='logo'>
              <img class='logo' src="{{url('/images/ICONS/twitter.png')}}" alt='logo'>
            </div>
          </div>
          <div>
            <p>© Game-On All rights reserved. All trademarks and registered trademarks are the property of their respective owners.</p>
            <p>Use of this Web site constitutes acceptance of the Terms and Conditions and Privacy policy. All copyrights, trade marks, service marks belong to the corresponding owners.</p>
          </div>
      </div>
    </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="{{url('/js/slick.min.js')}}"></script>
	    <script>

        const settings = {
          dots: false,
          infinite: true,
          speed: 500,
          slidesToShow: 3,
          slidesToScroll: 3,
        };

        $('.home-carousel').slick(settings);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>