
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('js/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @yield('css')
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin Page</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
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
                <a class="nav-link {{ Request::is('setup/carousel') ? 'active' : '' }}" href="#">
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

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          @yield('body')

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('js/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
    
    @yield('js')


    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>
</html>
