
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
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
            <a class="nav-link {{ Request::is('setup/users') ? 'active' : '' }}" href="#">
              <span data-feather="users"></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/carousel') ? 'active' : '' }}" href="/setup/carousel">
              <span data-feather="file"></span>
              Carousel Image
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/main_page') ? 'active' : '' }}" href="#">
              <span data-feather="shopping-cart"></span>
              Main Page
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/module') ? 'active' : '' }}" href="#">
              <span data-feather="bar-chart-2"></span>
              Module
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('setup/activity') ? 'active' : '' }}" href="#">
              <span data-feather="layers"></span>
              Activity
            </a>
          </li>
        </ul>
        <hr>

      </div>
    </nav>