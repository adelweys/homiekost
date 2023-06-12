<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo text-decoration-none" href="dashboard">BLOG BERITA</a>
    <a class="sidebar-brand brand-logo-mini text-decoration-none" href="index.html">TS</a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src={{ asset("assets/images/faces/face15.jpg") }} alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <span>*Online*</span>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link {{ Request::is('/dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
        <span class="menu-icon">
          <i class="mdi mdi-newspaper"></i>
        </span>
        <span class="menu-title">Kelola Berita</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        class="nav-link" type="submit">
        <span class="menu-icon">
          <i class="mdi mdi mdi-logout"></i>
        </span>
        {{-- <button type="submit" class="nav-link px-3 bg-dark border-0">Logout<span
            data-feather="log-out"></span></a></button> --}}
      <span class="menu-title">Logout</span>
      </a>
      <form id="logout-form" action="/logout" method="post" style="display: none">
        @csrf
      </form>
    </li>
  </ul>
</nav>