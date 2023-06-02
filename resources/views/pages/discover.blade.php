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
        <div class="content">
            <a href="/discover/counter-strike_global_offensive" class='GameCover'><img src="{{url('/images/GAMES/COUNTER-STRIKE GLOBAL OFFENSIVE/CSGO_Cover.png')}}" alt='img' class='gameimage'></a>
            <div class='GameDesc'>
            <a href="/discover/counter-strike_global_offensive" class='Gametitle'>Counter-Strike: Global Offensive</a>
            <p>Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).</p>
            </div>
        </div>
        <div class="content">
            <a href="/discover/dota_2" class='GameCover'><img src="{{url('/images/GAMES/DOTA 2/DOTA2_Cover.jpg')}}" alt='img' class='gameimage'></a>
            <div class='GameDesc'>
            <a href="/discover/dota_2" class='Gametitle'>DOTA 2</a>
            <p>Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes.
            And no matter if it's their 10th hour of play or 1,000th, there's always something new to discover. 
            With regular updates that ensure a constant evolution of gameplay, features, and heroes, 
            Dota 2 has taken on a life of its own.</p>
            </div>
        </div>
        <div class="content">
          <a href="/discover/apex_legends" class='GameCover'><img src="{{url('/images/GAMES/APEX LEGENDS/APEX_COVER.jpg')}}" alt='img' class='gameimage'></a>
          <div class='GameDesc'>
            <a href="/discover/apex_legends" class='Gametitle'>Apex Legends™</a>
            <p>Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.</p>
          </div>
        </div>
        <div class="content">
          <a href="/discover/pubg_battlegrounds" class='GameCover'><img src="{{url('/images/GAMES/PUBG/PUBG_Cover.png')}}" alt='img' class='gameimage'></a>
          <div class='GameDesc'>
            <a href="/discover/pubg_battlegrounds" class='Gametitle'>PUBG: BATTLEGROUNDS</a>
            <p>Play PUBG: BATTLEGROUNDS for free. Land on strategic locations, loot weapons and supplies, and survive to become the last team standing across various, diverse Battlegrounds. Squad up and join the Battlegrounds for the original Battle Royale experience that only PUBG: BATTLEGROUNDS can offer.</p>
          </div>
        </div>
        <div class="content">
          <a href="/discover/team_fortress_2" class='GameCover'><img src="{{url('/images/GAMES/TEAM FORTRESS 2/TF_Cover.jpg')}}" alt='img' class='gameimage'></a>
          <div class='GameDesc'>
            <a href="/discover/team_fortress_2" class='Gametitle'>Team Fortress 2</a>
            <p>Nine distinct classes provide a broad range of tactical abilities and personalities. Constantly updated with new game modes, maps, equipment and, most importantly, hats!</p>
          </div>
        </div>
        <div class="content">
          <a href="/discover/rust" class='GameCover'><img src="{{url('/images/GAMES/RUST/RUST_Cover.jpg')}}" alt='img' class='gameimage'></a>
          <div class='GameDesc'>
            <a href="/discover/rust" class='Gametitle'>Rust</a>
            <p>The only aim in Rust is to survive. Everything wants you to die - the island’s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.</p>
          </div>
        </div>
        <div class="content">
          <a href="/discover/grand_theft_auto_V" class='GameCover'><img src="{{url('/images/GAMES/GRAND THEFT AUTO V/GTAV_Cover.jpg')}}" alt='img' class='gameimage'></a>
          <div class='GameDesc'>
            <a href="/discover/grand_theft_auto_V" class='Gametitle'>Grand Theft Auto V</a>
            <p>Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.</p>
          </div>
        </div>
        <div class="content">
          <a href="/discover/call_of_duty_modern_warfare_II" class='GameCover'><img src="{{url('/images/GAMES/CALL OF DUTY MODERN WARFARE II/CODMWII_Cover.jpg')}}" alt='img' class='gameimage'></a>
          <div class='GameDesc'>
            <a href="/discover/call_of_duty_modern_warfare_II" class='Gametitle'>Call of Duty®: Modern Warfare® II</a>
            <p>Call of Duty®: Modern Warfare® II drops players into an unprecedented global conflict that features the return of the iconic Operators of Task Force 141.</p>
          </div>
        </div>
        <div class="content">
          <a href="/discover/destiny_2" class='GameCover'><img src="{{url('/images/GAMES/DESTINY 2/DESTINY2_Cover.jpg')}}" alt='img' class='gameimage'></a>
          <div class='GameDesc'>
            <a href="/discover/destiny_2" class='Gametitle'>Destiny 2</a>
            <p>Destiny 2 is an action MMO with a single evolving world that you and your friends can join anytime, anywhere, absolutely free.</p>
          </div>
        </div>
        <div class="content">
            <a href="/discover/age_of_wonders_4" class='GameCover'><img src="{{url('/images/GAMES/AGE OF WONDERS 4/AOW4_Cover.jpg')}}" alt='img' class='gameimage'></a>
            <div class='GameDesc'>
            <a href="/discover/age_of_wonders_4" class='Gametitle'>Age of Wonders 4</a>
            <p>Rule a fantasy realm of your own design! Explore new magical realms in Age of Wonders’ signature blend of 4X strategy and turn-based tactical combat. Control a faction that grows and changes as you expand your empire with each turn!</p>
            </div>
        </div>
        <div class="content">
            <a href="/discover/asssassins_creed_origins" class='GameCover'><img src="{{url('/images/GAMES/ASSASSINS CREED ORIGINS/ACO_Cover.jpg')}}" alt='img' class='gameimage'></a>
            <div class='GameDesc'>
             <a href="/discover/asssassins_creed_origins" class='Gametitle'>Assassin's Creed® Origins</a>
            <p>ASSASSIN’S CREED® ORIGINS IS A NEW BEGINNING *The Discovery Tour by Assassin’s Creed®: Ancient Egypt is available now as a free update!* Ancient Egypt, a land of majesty and intrigue, is disappearing in a ruthless fight for power.</p>
            </div>
        </div>
        <div class="content">
            <a href="/discover/ea_sports_fifa_23" class='GameCover'><img src="{{url('/images/GAMES/EA SPORTS FIFA 23/FIFA_Cover.jpg')}}" alt='img' class='gameimage'></a>
            <div class='GameDesc'>
              <a href="/discover/ea_sports_fifa_23" class='Gametitle'>EA SPORTS™ FIFA 23</a>
              <p>FIFA 23 brings The World’s Game to the pitch, with HyperMotion2 Technology, men’s and women’s FIFA World Cup™coming during the season, women’s club teams, cross-play features*, and more.</p>
            </div>
          </div>
          <div class="content">
            <a href="/discover/hogwarts_legacy" class='GameCover'><img src="{{url('/images/GAMES/HOGWARTS LEGACY/HL_Cover.jpg')}}" alt='img' class='gameimage'></a>
            <div class='GameDesc'>
              <a href="/discover/hogwarts_legacy" class='Gametitle'>Hogwarts Legacy</a>
              <p>Hogwarts Legacy is an immersive, open-world action RPG. Now you can take control of the action and be at the center of your own adventure in the wizarding world.</p>
            </div>
          </div>
          <div class="content">
            <a href="/discover/marvels_guardians_of_the_galaxy" class='GameCover'><img src="{{url('/images/GAMES/MARVELS GUARDIANS OF THE GALAXY/GOTG_Cover.jpg')}}" alt='img' class='gameimage'></a>
            <div class='GameDesc'>
              <a href="/discover/marvels_guardians_of_the_galaxy" class='Gametitle'>Marvel's Guardians of the Galaxy</a>
              <p>Fire up a wild ride across the cosmos with a fresh take on Marvel’s Guardians of the Galaxy. In this action-adventure game, you are Star-Lord leading the unpredictable Guardians from one explosion of chaos to the next. You got this. Probably.</p>
            </div>
          </div>
          <div class="content">
            <a href="/discover/monster_hunter_rise" class='GameCover'><img src="{{url('/images/GAMES/MONSTER HUNTER RISE/MHR_Cover.jpg')}}" alt='img' class='gameimage'></a>
            <div class='GameDesc'>
              <a href="/discover/monster_hunter_rise" class='Gametitle'>MONSTER HUNTER RISE</a>
              <p>Rise to the challenge and join the hunt! In Monster Hunter Rise, the latest installment in the award-winning and top-selling Monster Hunter series, you’ll become a hunter, explore brand new maps and use a variety of weapons to take down fearsome monsters as part of an all-new storyline.</p>
            </div>
          </div>
          <div class="content">
            <a href="/discover/monster_hunter_world" class='GameCover'><img src="{{url('/images/GAMES/MOSNTER HUNTER WORLD/MHW_Cover.jpg')}}" alt='img' class='gameimage'></a>
            <div class='GameDesc'>
              <a href="/discover/monster_hunter_world" class='Gametitle'>Monster Hunter: World</a>
              <p>Welcome to a new world! In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.</p>
            </div>
          </div>
          <div class="content">
            <a href="/discover/sons_of_the_forest" class='GameCover'><img src="{{url('/images/GAMES/SONS OF THE FOREST/SOTF_Cover.avif')}}" alt='img' class='gameimage'></a>
            <div class='GameDesc'>
              <a href="/discover/sons_of_the_forest" class='Gametitle'>Sons Of The Forest</a>
              <p>Sent to find a missing billionaire on a remote island, you find yourself in a cannibal-infested hellscape. Craft, build, and struggle to survive, alone or with friends, in this terrifying new open-world survival horror simulator.</p>
            </div>
          </div>
          <div class="content">
            <a href="/discover/star_wars_jedi_survivor" class='GameCover'><img src="{{url('/images/GAMES/STAR WARS JEDI SURVIVOR/SWJS_Cover.jpg')}}" alt='img' class='gameimage'></a>
            <div class='GameDesc'>
              <a href="/discover/star_wars_jedi_survivor" class='Gametitle'>STAR WARS Jedi: Survivor™</a>
              <p>The story of Cal Kestis continues in STAR WARS Jedi: Survivor™, a galaxy-spanning, third-person, action-adventure game.</p>
            </div>
        </div>
    </div>
        </div>
    </div>
</body>
</html>

@endsection