<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        {{-- kalau ada request yang urlnya dashboard maka tampilkan class active tapi kalau bukan kosongin --}}
        <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" aria-current="page" 
           href="{{ route('admin-dashboard') }}">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        {{-- kalau ada request yang urlnya dashboard/post maka tampilkan class active tapi kalau bukan kosongin --}}
        <a class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}"
           href="{{ route('user.index') }}">
          <span data-feather="user"></span>
          Users
        </a>
      </li>
      <li class="nav-item">
        {{-- kalau ada request yang urlnya dashboard/post maka tampilkan class active tapi kalau bukan kosongin --}}
        <a class="nav-link {{ Request::is('admin/category*') ? 'active' : '' }}" 
           href="{{ route('category.index') }}">
          <span data-feather="file-text"></span>
          Categories
        </a>
      </li>
    </ul>

  </div>
</nav>