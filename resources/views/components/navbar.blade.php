   <nav class="navbar navbar-expand-lg navbar-dark bg-light p-3 mb-5 nav-bg">
      <div class="container">
        <a class="navbar-brand text-white" href="index.html">
          <h1 class="fw-bold"><img class="logo3" height="30px" src="./logo5.svg" alt="">ITEC</h1>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0">
            <li class="nav-item">
              <a
                class="nav-link text-white"
                aria-current="page"
                href="locker.html"
                >Find a Locker</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="how.html"
                >How it works</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-white"
                aria-current="page"
                href="price.html"
                >Prices</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="faq.html"
                >FAQ</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-white"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img class="mb-1" src="./layer132.svg" alt="" /> Deutsch
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li>
                  <a class="dropdown-item" href="#"
                    ><img class="mb-1" src="./united_kingdon.svg" alt="" />
                    Englisch</a
                  >
                </li>
              </ul>
            </li>
          </ul>
          <ul
            class="navbar-nav me-left my-2 my-lg-0 navbar-nav-scroll"
            style="--bs-scroll-height: 100px"
          >
           @if (Route::has('login'))
              @auth
               <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link text-white">Home</a>
                        </li>
                    @else
                  <li class="nav-item"> 
                        <a href="{{ route('login') }}" class="nav-link text-white">Log in</a>
                        </li>
                        @if (Route::has('register'))
                       <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-white">Register</a>
                            </li>
                        @endif
                    @endauth
           @endif
          </ul>
        </div>
      </div>
    </nav>