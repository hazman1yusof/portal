
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/dashboard') ? 'active' : '' }}" href="/setup/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
        </ul>
        <hr>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Setup</span>
        </h6>

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/users') ? 'active' : '' }}" href="/setup/users">
              <span data-feather="users"></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/carousel') ? 'active' : '' }}" href="/setup/carousel">
              <span data-feather="airplay"></span>
              Carousel Image
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/mainpage') ? 'active' : '' }}" href="/setup/mainpage">
              <span data-feather="file"></span>
              Main Page
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/module') ? 'active' : '' }}" href="/setup/module">
              <span data-feather="codepen"></span>
              Module
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/activity') ? 'active' : '' }}" href="/setup/activity">
              <span data-feather="layers"></span>
              Activity
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/info') ? 'active' : '' }}" href="/setup/info">
              <span data-feather="book"></span>
              Info
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/socmed') ? 'active' : '' }}" href="/setup/socmed">
              <span data-feather="facebook"></span>
              Social Media
            </a>
          </li>
        </ul>
        <hr>

      </div>
    </nav>