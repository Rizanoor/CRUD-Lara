<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
  <div class="container-xxl mx-auto p-0  position-relative header-2-2" style="font-family: 'Poppins', sans-serif">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a href="{{ route('home') }}">
        <img style="margin-right: 0.75rem"
          src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png" alt="" />
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
        aria-labelledby="targetModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-white border-0">
            <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
              <a class="modal-title" id="targetModalLabel">
                <img style="margin-top: 0.5rem"
                  src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png"
                  alt="" />
              </a>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            {{-- Mobile --}}
            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
              <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Games</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Create Avatar</a>
                </li>
              </ul>
            </div>
            <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
              <!-- Authentication Links -->
              @guest
                <div class="gap-3">
                  <a href="{{ route('login') }}" class="btn btn-default btn-no-fill">Log In</a>
                  <a href="{{ route('register') }}" class="btn btn-fill text-white">Register</a>
                </div>
              @endguest

              @auth
                <ul class="navbar-nav ms-auto">
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                              <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="rounded-circle user-photo w-15" alt="" style="max-height: 45px;">
                          </a>
    
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item">My Account</a>
                            <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                 Logout
                              </a>
    
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
              @endauth
              
                </ul>
            </div>
          </div>
        </div>
      </div>

      {{-- Dekstop --}}
      <div class="collapse navbar-collapse" id="navbarTogglerDemo">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Games</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Create Avatar</a>
          </li>
        </ul>
        @guest
          <div class="gap-3">
            <a href="{{ route('login') }}" class="btn btn-default btn-no-fill">Log In</a>
            <a href="{{ route('register') }}" class="btn btn-fill text-white">Register</a>
          </div>

        @endguest

          @auth
            <ul class="navbar-nav ms-auto">
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          Hi, {{ Auth::user()->name }}
                          @if (Auth::user()->avatar)
                              <img src="{{ Auth::user()->avatar }}" class="rounded-circle user-photo w-15" alt="" style="max-height: 45px;">
                          @else
                              <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="rounded-circle user-photo w-15" alt="" style="max-height: 45px;">
                          @endif
                      </a>

                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item">My Account</a>
                        <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
            </ul>
          @endauth
      </div>
    </nav>

    <div>
      <div class="mx-auto d-flex flex-lg-row flex-column hero">
        <!-- Left Column -->
        <div
          class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
          <p class="text-caption">FREE 30 DAY TRIAL</p>
          <h1 class="title-text-big">
            The best way<br class="d-lg-block d-none" />
            to organize your online learning
          </h1>
          <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
            <button class="btn d-inline-flex mb-md-0 btn-try text-white">
              Try it free
            </button>
            <button class="btn btn-outline">
              <div class="d-flex align-items-center">
                <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z"
                    fill="#555B61" />
                </svg>
                Watch the video
              </div>
            </button>
          </div>
        </div>
        <!-- Right Column -->
        <div class="right-column text-center d-flex justify-content-center pe-0">
          <img id="img-fluid" class="h-auto mw-100"
            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png"
            alt="" />
        </div>
      </div>
    </div>
  </div>
</section>

