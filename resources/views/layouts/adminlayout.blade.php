<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- My CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/admin-style.css')}}" />

    <title>Game-On</title>
  </head>
  <body>
    <!-- SIDEBAR -->
    <section id="sidebar">
      <a href="#" class="brand">
        <i class="bx bxs-terminal"></i>
        <span class="text">Game-On</span>
      </a>
      <ul class="side-menu top">
        
        <li class="{{str_contains(URL::current(), "dashboard") ? "active" : ""}}">
          <a href="{{url("admin/dashboard")}}">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li class="{{str_contains(URL::current(), "products") ? "active" : ""}}">
          <a href="{{url("admin/products")}}">
            <i class="bx bxs-shopping-bag-alt"></i>
            <span class="text">Products</span>
          </a>
        </li>
        <li class="{{str_contains(URL::current(), "user") ? "active" : ""}}">
          <a href="{{url("admin/users")}}">
           <i class='bx bxs-user'></i>
            <span class="text">Users</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class="bx bxs-message-dots"></i>
            <span class="text">Message</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class="bx bxs-group"></i>
            <span class="text">Team</span>
          </a>
        </li> -->
      </ul>
      <ul class="side-menu">
        <!-- <li>
          <a href="#">
            <i class="bx bxs-cog"></i>
            <span class="text">Settings</span>
          </a>
        </li> -->
        <li>
          <form action="{{ route('logout') }}" method="POST">
          <a href="{{route('logout')}}" class="logout">
            <i class="bx bxs-log-out-circle"></i>
            <span class="text">Logout</span>
          </a>
          </form>
        </li>
      </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
      <!-- NAVBAR -->
      <nav>
        <i class="bx bx-menu"></i>
        <!-- <a href="#" class="nav-link">Categories</a> -->
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="Search..." />
            <button type="submit" class="search-btn">
              <i class="bx bx-search"></i>
            </button>
          </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden />
        <label for="switch-mode" class="switch-mode"></label>
        <!-- <a href="#" class="notification">
          <i class="bx bxs-bell"></i>
          <span class="num">8</span>
        </a> -->
        <a href="#" class="profile">
          <img src="{{url("images/ADMIN/users-icon.webp")}}"/>
        </a>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
       @yield("content")
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="{{url("/js/admin-scripts.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
