    <header class="header" data-header>
    <div class="container">

      <a href="{{url('/')}}" class="logo">AguraMarket</a>

      <nav class="navbar container" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="{{url('/')}}" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="{{url('/#service')}}" class="navbar-link" data-nav-link>Services</a>
          </li>

          <li>
            <a href="{{url('/shop')}}" class="navbar-link" data-nav-link>Ecommerce</a>
          </li>

          <li>
            <a href="{{url('/#about')}}" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li>
            <a href="{{url('/#contact')}}" class="navbar-link" data-nav-link>Contact Us</a>
          </li>

          <li>
            @if (Route::has('login'))
              <div class="butt">
                
                @auth
                <x-app-layout>
    
                </x-app-layout>
                @else
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <a href="{{ route('register') }}" class="btn btn-info">Sign in</a>
                @endauth
              </div>
              @endif
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

    </div>
  </header>