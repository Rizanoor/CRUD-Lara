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
    </div>
</section>