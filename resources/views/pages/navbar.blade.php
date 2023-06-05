<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{url('/images/LOGO/arcade-machine.png')}}" alt='logo' width="30" height="24">
      GAME-ON
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <form class="d-flex" role="search">
            <input class="form-control me-5" type="search" placeholder="Search" aria-label="Search" id="search-input" onkeyup="fetchList()">
            <div class="result-list"></div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/discover">Discover</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          @if (Route::has('login'))
                <div>
                  @auth
                      <a class="nav-link" href="{{ url('/dashboard') }}" >Dashboard</a>
                  @else
                      <a class="nav-link" href="{{ route('login') }}">Login</a>
                  @endauth
                </div>
              @endif
        </li>
      </ul>
      
    </div>
  </div>
</nav>


<script>
    const gameData = [
      { id: 1, gameName: "Asssassins Creed Origins", page: "asssassins_creed_origins",},
      { id: 2, gameName: "Age of Wonders 4", page: "age_of_wonders_4" },
      { id: 3, gameName: "Apex Legends", page: "apex_legends" },
      { id: 4, gameName: "Call Of Duty Modern Warfare II", page: "call_of_duty_modern_warfare_II",},
      { id: 5, gameName: "Counter Strike Global Offensive", page: "counter-strike_global_offensive",},
      { id: 6, gameName: "Destiny 2", page: "destiny_2" },
      { id: 7, gameName: "Dota 2", page: "dota_2" },
      { id: 8, gameName: "EA Sports Fifa 23", page: "ea_sports_fifa_23" },
      { id: 9, gameName: "Grand Theft Auto V", page: "grand_theft_auto_V" },
      { id: 10, gameName: "Hogwarts Legacy", page: "hogwarts_legacy" },
      { id: 11, gameName: "Marvels Guardians Of The Galaxy", page: "marvels_guardians_of_the_galaxy",},
      { id: 12, gameName: "Monster Hunter Rise", page: "monster_hunter_rise" },
      { id: 13,gameName: "Monster Hunter World",page: "monster_hunter_world",},
      { id: 14, gameName: "Path Of Exile", page: "path_of_exile" },
      { id: 15, gameName: "PUBG Battlegrounds", page: "pubg_battlegrounds" },
      { id: 16, gameName: "Rust", page: "rust" },
      { id: 17, gameName: "Sons Of The Forest", page: "sons_of_the_forest" },
      { id: 18,gameName: "Star Wars Jedi Survivor",page: "star_wars_jedi_survivor",},
      { id: 19, gameName: "Team Fortress 2", page: "team_fortress_2" },
      { id: 20, gameName: "War Thunder", page: "war_thunder" },
    ];

    function fetchList() {
        document.querySelector(".result-list").innerHTML = "";
        const value = document.querySelector("#search-input").value;
        const result = gameData.filter((game) => {
            return (
                value &&
                game &&
                game.gameName &&
                game.gameName.toLocaleLowerCase().includes(value)
            );
        });
        result.forEach(game => {
            const $list = document.createElement("a");
            $list.classList.add("search-result");
            $list.href = "{{ url('/') }}" + `/discover/${game.page}`
            $list.text = game.gameName;
            document.querySelector(".result-list").appendChild($list);
        });
    }
</script>