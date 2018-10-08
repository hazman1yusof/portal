
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('js/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- FA Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <!-- header starts -->
    <header class="blog-header py-3">
      <div class="row"><a href="{{$title_link}}"><span id="top-cert">{{$main_title}}</span></a></div>
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-md-4 offset-md-2">
          <a href="{{$logo1_link}}">
            <img src="{{$logo1}}" height="110">
          </a>
          <a href="{{$logo2_link}}">
            <img src="{{$logo2}}" height="110">
          </a>
        </div>
      </div>
    </header>
    <!-- header ends -->

    <!-- Navbar starts -->
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between" id="nav">
        <a class="p-2 text-muted" href="#">Home</a>
        <a class="p-2 text-muted" href="#">About</a>
        <a class="p-2 text-muted" href="#">Vision</a>
        <a class="p-2 text-muted" href="#">Mission</a>
        <a class="p-2 text-muted" href="#">Staff</a>
        <a class="p-2 text-muted" href="#">Course</a>
        <a class="p-2 text-muted" href="#">Archive</a>
      </nav>
    </div>
    <!-- Navbar ends -->

    <div class="container-fluid">
      <div class="row">
        <!-- Login form starts -->
        <div class="col-lg-3 form-sec-outer">
          <div class="container form-sec-inner">
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
              @csrf
              <div class="form-header">Login</div>
              <hr>
              <div class="form-group">
                <label for="username">Username</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary login_button">Login</button>
                <a class="btn btn-primary" href="#" role="button">Sign Up</a>
              </div>
            </form>
          </div>
        </div>
        <!-- Login form ends -->
        
        <!-- Carousel starts -->
        <div class="col-lg-9 slider-sec-outer">
          <section class="">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-xs-12">
                  <div id="slider">
                    <input type="radio" name="slider" id="s1" checked>
                    <input type="radio" name="slider" id="s2">
                    <input type="radio" name="slider" id="s3">
                    <input type="radio" name="slider" id="s4">
                    <input type="radio" name="slider" id="s5">
                    <label for="s1" id="slide1">
                      <div class="testimony-card slide1">
                      <img class="img-fluid" src="https://uc.uxpin.com/files/91911/99228/5F8C5D50-DDB6-4F06-AA15-ACB30D8D910D-200w-e3c509.jpeg" alt="writer-photo" draggable="false">
                      </div>
                    </label>
                    <label for="s2" id="slide2">
                      <div class="testimony-card">
                      <img class="img-fluid" src="https://uc.uxpin.com/files/91911/99228/5F8C5D50-DDB6-4F06-AA15-ACB30D8D910D-200w-e3c509.jpeg" alt="writer-photo" draggable="false">
                      </div>
                    </label>
                    <label for="s3" id="slide3">
                      <div class="testimony-card">
                      <img class="img-fluid" src="https://uc.uxpin.com/files/91911/99228/5F8C5D50-DDB6-4F06-AA15-ACB30D8D910D-200w-e3c509.jpeg" alt="writer-photo" draggable="false">
                      </div>
                    </label>
                    <label for="s4" id="slide4">
                      <div class="testimony-card">
                      <img class="img-fluid" src="https://uc.uxpin.com/files/91911/99228/5F8C5D50-DDB6-4F06-AA15-ACB30D8D910D-200w-e3c509.jpeg" alt="writer-photo" draggable="false">
                      </div>
                    </label>
                    <label for="s5" id="slide5">
                      <div class="testimony-card">
                        <img class="img-fluid" src="https://uc.uxpin.com/files/91911/99228/5F8C5D50-DDB6-4F06-AA15-ACB30D8D910D-200w-e3c509.jpeg" alt="writer-photo" draggable="false">
                      </div>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- Carousel ends -->
      </div>
    </div>


    <!-- Module flexbox starts -->
    <div class="outer">
      <div class="flex">
        @foreach($module as $key => $data)
          <div class="box">
            <a href="{{$data->module_link}}"><img src="{{$data->module_image}}" style="height:200px;max-width:400px" alt="Card image cap"></a>
          </div>
        @endforeach
      </div>
    </div>
    <!-- Module flexbox ends -->

    <div class="container con-sec">
      <!-- Module starts -->
      <!--
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" style="height:240px;max-width:400px" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" style="height:240px;max-width:400px" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" style="height:240px;max-width:400px" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" style="height:240px;max-width:400px" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      -->
      <!-- Module ends -->

      <div class="row">
        <div class="col-md-8 blog-main">
          <!-- Aktiviti starts -->
          <p></p><p></p>
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            {{$activity_title}}
          </h3>
          <div class="table-responsive">          
            <table class="table table-striped">
              <tbody>
                @foreach($activity as $key => $data)
                  <tr>    
                    <th>{{$data->activity_date}}</th> 
                    <th>{{$data->activity_name}}</th>
                    <th>{{$data->activity_time}}</th>
                    <th>{{$data->activity_venue}}</th> 
                    <th>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#aktiviti_{{$key}}">
                        Details
                      </button>
                      <!-- The Modal -->
                      <div class="modal fade" id="aktiviti_{{$key}}">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">{{$data->activity_name}}</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                              <img class="center" src="{{$data->activity_image}}" alt="Card image cap" width="580">   
                              <br>
                              <p>{{$data->activity_desc}}</p>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </th>           
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- Aktiviti ends -->

          <!-- Info starts -->
          <p></p><p></p>
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            {{$info_title}}
          </h3>
          @foreach($info as $key => $data)
            <div class="col-md-12">
              <div class="card flex-md-row mb-4 box-shadow h-md-250 ">
                <div class="card-body d-flex flex-column align-items-start">          
                  <h3 class="mb-0">
                    <!-- <a class="text-dark" href="#">{{$data->info_name}}</a> -->
                    <a class="text-dark" >{{$data->info_name}}</a>
                  </h3>
                  <div class="mb-1 text-muted">{{$data->info_date}}</div>
                  <p class="card-text mb-auto">{{$data->info_content}}</p>
                  <!-- <a href="#" class="btn btn-sm btn-outline-secondary">Details</a> -->
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" width="180" height="230" src="{{$data->info_image}}" alt="Card image cap">
              </div>
            </div>
          @endforeach
          <!-- Info ends -->
        </div><!-- /.blog-main -->
          
        <!-- Sidebar starts -->
        <aside class="col-md-4 blog-sidebar">        
          <div class="p-3">
            <p></p><p></p>
            <h4 class="pb-3 mb-4 font-italic border-bottom">{{$social_media}}</h4>
            <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Facebook</button>
              <button class="tablinks" onclick="openCity(event, 'Paris')">Twitter</button>
              <button class="tablinks" onclick="openCity(event, 'Tokyo')">DLL</button>
            </div>
            <div id="London" class="tabcontent">
              <div class="container">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMasjidBBSB&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
                  width="250" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
                </iframe>
              </div>
            </div>
            <div id="Paris" class="tabcontent">
              <h3>Twitter</h3>
              <p>Twitter account here.</p> 
            </div>
            <div id="Tokyo" class="tabcontent">
              <h3>DLL</h3>
              <p>Others.</p>
            </div>
          </div>
        </aside><!-- /.blog-sidebar -->
        <!-- Sidebar ends -->  
      </div><!-- /.row -->

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
          <div class="row mt-3">
            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4 dark-grey-text">
              <h6 class="text-uppercase font-weight-bold">
                <strong>{{$about_title}}</strong>
              </h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>{{$about_info}}</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
              <h6 class="text-uppercase font-weight-bold">
                <strong>{{$links_title}}</strong>
              </h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>{{$links_list}}</p>
              <!-- <p>
                <a href="https://facebook.com/MasjidBBSB/" class="dark-grey-text">Facebook</a>
              </p>
              <p>
                <a href="http://e-masjid.jais.gov.my/index.php/profail/show/id/299" class="dark-grey-text">Portal JAIS</a>
              </p> -->
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-4 col-lg-3 col-xl-3 dark-grey-text">
              <h6 class="text-uppercase font-weight-bold">
                <strong>{{$contact_title}}</strong>
              </h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <i class="fa fa-home mr-3"></i> {{$contact_address}}
              </p>
              <p>
                <i class="fa fa-phone mr-3"></i> {{$contact_tel}}
              </p>
              <p>
                <i class="fa fa fa-fax mr-3"></i> {{$contact_fax}} (Fax)
              </p>
              <p>
                <i class="fa fa fa-mobile mr-3"></i> {{$contact_whatsapp}} (Whatsapp)
              </p>
            </div>
            <!--/.Third column-->

          </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright py-3 text-center">
          © 2018 Institute of Visual Informatics Universiti Kebangsaan Malaysia
        </div>
        <!--/.Copyright -->
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Sidebar social media -->
    <script src="{{ asset('js/socmed.js') }}"></script>
    <!-- Module carousel -->
    <!-- <script src="{{ asset('js/cardcarousel.js') }}"></script> -->
  </body>
</html>
