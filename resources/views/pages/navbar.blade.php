<nav class='navbar'>
    <div class='nav-brand'>
        <a href="/" class='gameon-logo'>
            <img class='logo' src="{{url('/images/LOGO/arcade-machine.png')}}" alt='logo'>
        </a>
        <a href="/" class='gameon-brand'>GAME-ON</a>
    </div>
    
    <div class='navbar-links'>
        <ul>
            <li><a class='links' href="/">STORE</a></li>
            <li><a class='links' href="/discover">DISCOVER</a></li>
            <li><a class='links' href="/about">ABOUT</a></li>
            <li>
              @if (Route::has('login'))
                <div>
                  @auth
                      <a class="links" href="{{ url('/dashboard') }}" >Dashboard</a>
                  @else
                      <a class="links" href="{{ route('login') }}">LOGIN</a>
                  @endauth
                </div>
              @endif
            </li>
        </ul>
    </div>
    <div class='toggle-button'>
        <span class='line'></span>
        <span class='line'></span>
        <span class='line'></span>
    </div>
</nav>