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
                      <a class="nav-link" href="{{ url('/dashboard') }}" >Profile</a>
                  @else
                      <a class="nav-link" href="{{ route('login') }}">Login</a>
                  @endauth
                </div>
              @endif
        </li>
        <li class="nav-item">
          @if(Route::has('login'))
            @auth
            <a class="nav-link"href="{{ route('wishlist.list') }}">Wishlist</a>
            @endauth
          @endif
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cart.list') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <span class="text-danger">{{ Cart::getTotalQuantity()}}</span>
          </a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>


<script>
    const gameData = @json($games);

    function fetchList() {
        document.querySelector(".result-list").innerHTML = "";
        const value = document.querySelector("#search-input").value;
        const result = gameData.filter((game) => {
            return (
                value &&
                game &&
                game.game_title &&
                game.game_title.toLocaleLowerCase().includes(value)
            );
        });
        result.forEach(game => {
            const $list = document.createElement("a");
            $list.classList.add("search-result");
            $list.href = "{{ url('/') }}" + `/discover/${game.id}`
            $list.text = game.game_title;
            document.querySelector(".result-list").appendChild($list);
        });
    }
</script>