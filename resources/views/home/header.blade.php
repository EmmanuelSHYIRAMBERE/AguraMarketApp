<header class="header" data-header>
      <div class="container">
        

      
        <a href="#" class="logo">AguraMarket</a>

        
        <ul class="navbar-nav w-50">
                            <li class="nav-item w-100">
                                <form
                                    class="nav-link mt-2 mt-md-0 d-none d-lg-flex search"
                                >
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Search products"
                                    />
                                </form>
                            </li>
                        </ul>
        <a href="{{url('/show_cart')}}" class="navbar-link" data-nav-link><i class="mdi mdi-cart"></i>Cart</a>
        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="{{url('/')}}" class="navbar-link" data-nav-link>Home</a>
              <a href="{{url('/')}}#services" class="navbar-link" data-nav-link>Services</a>
              <a href="{{url('/')}}#about" class="navbar-link" data-nav-link>About</a>
              <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
              <a href="{{url('/contact')}}" class="navbar-link" data-nav-link
                >Contact Us</a
              >
              @if (Route::has('login'))
              <div class="butt">
                
                @auth
                <x-app-layout>
    
                </x-app-layout>
                @else
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <a href="{{ route('login') }}" class="btn btn-success">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-danger register">Register</a>
                @endif
                @endauth
              </div>
              @endif
            </li>
          </ul>
        </nav>

        <button
          class="nav-toggle-btn"
          aria-label="Toggle menu"
          data-nav-toggler
        >
          <ion-icon name="menu-outline" class="open"></ion-icon>
          <ion-icon name="close-outline" class="close"></ion-icon>
        </button>
      </div>
    </header>