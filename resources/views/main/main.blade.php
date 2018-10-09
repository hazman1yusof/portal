
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>UKM -IVI- portal</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('js/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- FA Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <!-- header starts -->

    @guest
    <div class=" m-3 d-none d-md-block login-card">
      <form class="form-signin" method="POST" action="/login">
        @csrf
        <div class="row">
          <div class="col">
            <input type="text" id="username" name="username" class="form-control form-control-sm" placeholder="Username" required>
          </div>
          <div class="col">
            <input type="password" id="inputPassword" name="password" class="form-control form-control-sm" placeholder="Password" required style="margin-bottom: 5px">
          </div>
          <div class="d-flex" role="group" aria-label="Basic example">
            <button class="btn btn-primary btn-sm w-100" type="submit">Log in</button>
          </div>
        </div>
      </form>
    </div>
    @endguest

    <header class="blog-header py-3">
      @auth
      <div class="dropdown">
        <a href="#" class="badge badge-light ml-4" style="background-color:#f8f9fa00; color: #ced4da" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{ asset('css/img_avatar.png') }}" alt="Avatar" class="avatar"> {{auth()->user()->username}}
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">My Profile</a>
          <a class="dropdown-item" href="/logout">Sign Out</a>
        </div>
      </div>
      @endauth
      <div class="row"><a href="{{$title_link}}"><span id="top-cert">{{$main_title}}</span></a></div>
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-md-4 offset-md-3">
        <a href="{{$logo1_link}}">
            <img src="{{$logo1}}" height="100">
          </a>
          <a href="{{$logo2_link}}">
            <img src="{{$logo2}}" height="100">
          </a>
        </div>
      </div>
    </header>
    <!-- header ends -->

    <!-- Navbar starts -->
    <div class="nav-scroller py-1 mb-2 sticky-top">
      <nav class="nav d-flex justify-content-between" id="nav">
        <a class="p-2 btn btn-warning" href="#">Home</a>
        <a class="p-2 btn" href="#">About</a>
        <a class="p-2 btn" href="#">Vision</a>
        <a class="p-2 btn" href="#">Mission</a>
        <a class="p-2 btn" href="#">Staff</a>
        <a class="p-2 btn" href="#">Module</a>
        @auth<a class="p-2 btn btn-secondary" href="/setup/dashboard" style="color: white">{{auth()->user()->role}}</a>@endauth
      </nav>
    </div>
    <!-- Navbar ends -->

    <!-- Carousel starts -->
    <div id="vue-slider">
      <div class="row row-para m-0 p-3">
        <carousel-3d :count="slides.length" :controls-visible="carouselControls" :width="slideWidth"
                     :height="slideHeight" :autoplay="autoplayEnabled" :disable3d="disable3d"
                     :space="slideSpace" :perspective="slidePerspective" :display="visible" :loop="infinite"
                     :animation-speed="animationSpeed" :dir="direction" :border="slideBorder"
                     :start-index="startIndex"
                     :inverse-scaling="slideScaling">
            @foreach($carousels as $carousel)
              <slide :index="{{$loop->index}}">
                <img src="{{env('APP_URL')}}uploads/{{$carousel->carousel_path}}" style="width: 100%;height: 100%;object-fit: fill;">
              </slide>
            @endforeach
        </carousel-3d>
      </div>
    </div>
    <!-- Carousel ends -->

    <!-- Module starts -->
    <div class="row row-card py-4 m-0">
      <div class="container">
        <div class="card-deck text-center">
          @foreach($modules as $module)
          <div class="card shadow-sm">
            <img class="card-img-top" src="{{env('APP_URL')}}uploads/{{$module->module_image}}" style="height:240px;max-width:400px" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">{{$module->module_name}}</h3>
              <p class="card-text">{{str_limit($module->module_summary, 215, ' ...')}}</p>
              <a href="">Find more info</a>
            </div>
          </div>
          @endforeach
        </div> 
      </div>
    </div>
    <!-- Module ends -->

    <div id="contain-div">
      <div class="row row-para m-0 py-4">
        <div class="container">
          <div class="row m-0">
            <div class="col-md-7 blog-main m-2">
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
            <aside class="col-md-4 blog-sidebar m-2">
              <div class="p-3">
                <p></p><p></p>
                <h4 class="pb-3 mb-4 font-italic border-bottom">Social Media</h4>
                <div class="tab">
                  <button class="tablinks" onclick="openCity(event, 'fb')" id="defaultOpen">Facebook</button>
                  <button class="tablinks" onclick="openCity(event, 'tw')">Twitter</button>
                  <button class="tablinks" onclick="openCity(event, 'ins')">Instagram</button>
                </div>
                <div id="fb" class="tabcontent">
                  <div class="container">
                    {!! !empty($facebook)?$facebook->socmed_desc:''!!}
                  </div>
                </div>
                <div id="tw" class="tabcontent">
                  <h3>Twitter</h3>
                  <p>Twitter account here.</p> 
                  {!! !empty($twitter)?$twitter->socmed_desc:''!!}
                </div>
                <div id="ins" class="tabcontent">
                  <h3>Instagram</h3>
                  <p>Others.</p>
                  {!! !empty($instagram)?$instagram->socmed_desc:''!!}
                </div>
              </div>
            </aside><!-- /.blog-sidebar -->
            <!-- Sidebar ends -->  
          </div>
        </div>
      </div> 
    </div>

    <div class="row m-0">
      <div class="container">
        <!-- Footer -->
        <footer class="page-footer font-small blue pt-4 border-top">
          <!-- Footer Links -->
          <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
              <!-- Grid column -->
              <div class="col-md-5 mt-md-0 mt-3">
                <!-- Content -->
                <h5 class="text-uppercase">{{$contact_title}}</h5>
                <p> {{$contact_address}} </p>
                <p>
                  <i class="fa fa-phone mr-3"></i> {{$contact_tel}}
                </p>
                <p>
                  <i class="fa fa fa-fax mr-3"></i> {{$contact_fax}}
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 mt-md-0 mt-3">
              </div>
              <!-- Grid column -->

              <hr class="clearfix w-100 d-md-none pb-3">

              <!-- Grid column -->
              <div class="col-md-4 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>
                <p>{!! $links_list !!}</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
          <!-- Footer Links -->

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">
            © 2018 Institute of Visual Informatics Universiti Kebangsaan Malaysia
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ asset('asset/vue-carousel-3d.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Sidebar social media -->
    <script src="{{ asset('js/socmed.js') }}"></script>
    <!-- Module carousel -->
    <!-- <script src="{{ asset('js/cardcarousel.js') }}"></script> -->
    <script type="text/javascript">

        var slides = new Vue({
            el: '#vue-slider',
            components: {
                'carousel-3d': Carousel3d.Carousel3d,
                'slide': Carousel3d.Slide
            },
            data: {
                carouselControls: true,
                slideWidth: 820,
                slideHeight: 461,
                slideBorder: 1,
                slideSpace: 240,
                slidePerspective: 35,
                slideScaling: 300,
                animationSpeed: 500,
                startIndex: 0,
                autoplayEnabled: true,
                visible: 5,
                direction: 'rtl',
                infinite: true,
                disable3d: false,
                slides: []
            },
            methods: {
                addSlide () {
                    this.slides.push({
                        title: 'Slide X',
                        desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, maxime.',
                        src: 'https://placehold.it/360x270'
                    })
                },
                removeSlide () {
                    this.slides.pop()
                }
            }
        });

        slides.$nextTick(function () {
          $('.carousel-3d-container').css("height", "+=20")
        })

    </script>
  </body>
</html>
