
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
  </head>

  <body>
    <!-- header starts -->

    @guest
    <div class="card m-3 d-none d-md-block login-card">
      <div class="card-body" >
        <form class="form-signin" method="POST" action="/login">
          @csrf
          <input type="text" id="username" name="username" class="form-control form-control-sm" placeholder="Username" required>
          <input type="password" id="inputPassword" name="password" class="form-control form-control-sm" placeholder="Password" required style="margin-bottom: 5px">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
            <label class="form-check-label" for="autoSizingCheck2">
              Remember me
            </label>
          </div>
          <div class="btn-group btn-group-sm d-flex" role="group" aria-label="Basic example">
            <button class="btn btn-primary w-100" type="submit">Log in</button>
            <button type="button" class="btn btn-secondary w-100">Sign up</button>
          </div>
        </form>
      </div>
    </div>
    @endguest

    <header class="blog-header py-3">
      <div class="row"><span id="top-cert">Certified by Body of Institute of Visual Informatics (IVI)</span></div>
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-md-4 offset-md-3"">
          <img src="{{env('APP_URL')}}uploads/logo/logo_ukm_ivi.png">
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
        @auth<a class="p-2 btn btn-secondary" href="/setup/dashboard" style="color: white">User | {{auth()->user()->username}}</a>@endauth
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
              <p class="card-text">{{$module->module_summary}}</p>
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
                Aktiviti 
              </h3>
              <div class="table-responsive">          
                <table class="table table-striped">
                  <tbody>
                    <tr>    
                      <th>tarikh_aktiviti</th> 
                      <th>nama_aktiviti</th>
                      <th>masa_aktiviti</th>
                      <th>tempat_aktiviti</th> 
                      <th>
                        <!-- Betulkan dekat button data-target="#aktiviti_$key}}" Double check kat project masjid-->
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#aktiviti">
                          Details
                        </button>
                        <!-- The Modal -->
                        <!-- Betulkan dekat bawah id="aktiviti_$key}}" -->
                        <div class="modal fade" id="aktiviti">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">nama_aktiviti</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!-- Modal body -->
                              <div class="modal-body">
                                <img class="center" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">   
                                <br>
                                <p>desc_aktiviti</p>
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
                  </tbody>
                </table>
              </div>
              <!-- Aktiviti ends -->

              <!-- Info starts -->
              <p></p><p></p>
              <h3 class="pb-3 mb-4 font-italic border-bottom">
                Info
              </h3>
              <div class="col-md-12">
                <div class="card flex-md-row mb-4 box-shadow h-md-250 ">
                  <div class="card-body d-flex flex-column align-items-start">          
                    <h3 class="mb-0">
                      <a class="text-dark" >tajuk_makluman</a>
                    </h3>
                    <div class="mb-1 text-muted">tarikh_makluman</div>
                    <p class="card-text mb-auto">isi_makluman</p>
                  </div>
                  <img class="card-img-right flex-auto d-none d-md-block" width="180" height="230" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                </div>
              </div>
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
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
          <div class="row">
            <div class="col-12 col-md">
              <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
            </div>
            <div class="col-6 col-md">
              <h5>Features</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Cool stuff</a></li>
                <li><a class="text-muted" href="#">Random feature</a></li>
                <li><a class="text-muted" href="#">Team feature</a></li>
                <li><a class="text-muted" href="#">Stuff for developers</a></li>
                <li><a class="text-muted" href="#">Another one</a></li>
                <li><a class="text-muted" href="#">Last time</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>Resources</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Resource</a></li>
                <li><a class="text-muted" href="#">Resource name</a></li>
                <li><a class="text-muted" href="#">Another resource</a></li>
                <li><a class="text-muted" href="#">Final resource</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>About</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Team</a></li>
                <li><a class="text-muted" href="#">Locations</a></li>
                <li><a class="text-muted" href="#">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ asset('asset/vue-carousel-3d.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
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
                autoplayEnabled: false,
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
