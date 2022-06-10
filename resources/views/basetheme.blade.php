<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>{{ config('app.name', 'Expat Tax') }}</title>

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="css/app.css"> -->

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}" rel="stylesheet">
        <link rel="stylesheet" rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/sidebars.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">


        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
        </style>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>

   <body class="d-flex flex-column">

    <div class="d-flex flex-column flex-grow-1">



<div class="container-fluid px-5 ">

  <header>
    <div class="d-flex flex-column flex-md-row align-items-center  ">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <img class="site-logo" src="{{ asset('assets/images/expat-logo.png') }}">
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto mr-4 top-nav-bar">
        <a class="me-3 py-2  text-decoration-none" href="#">Questionaire</a>
        <a class="me-3 py-2  text-decoration-none" href="#">My Files</a>
        <a class="me-3 py-2  text-decoration-none" href="#">Contact Us</a>
        <a href="/login" class="py-2  text-decoration-none" href="#">Login</a>
      </nav>
    </div>

  </header>


</div>


<main>

  <div class="container-fluid px-4 py-1 main-outter box">

    <div class="inner-wrapper ">

      <header  class="mx-auto bread-crumbs py-4">
        <!-- <h5>Optional: Header/ Message/ Summary</h5> -->
      </header>

      <div class="content-wrapper artboard container">

        <div class="row">

            <div class="col-md-3 side-bar-wrapper">
                <!-- App Side Bar -->
              @livewire('app-side-bar')


              <nav class="sidebar">

                   <ul class="list-unstyled ps-0 sidebar-nav mt-4">
                       <li  class="mb-2 {{ Request::is('instructions*') ? 'active' : '' }}">
                          <button class="cs-btn btn-single-item align-items-center rounded collapsed px-4"  aria-expanded="false">
                           <a href="/instructions"> Instructions </a>
                          </button>

                        </li>

                        <li class="mb-4">
                          <button class="cs-btn btn-toggle align-items-center rounded collapsed px-4"
                          data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                            General Information
                          </button>
                          <div class="collapse " id="home-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li class="{{ Request::is('general-questions*') ? 'active' : '' }}">
                                <a href="/general-questions" class="link-dark rounded">General Questions</a></li>
                              <li class="{{ Request::is('personal-information*') ? 'active' : '' }}"><a href="/personal-information" class="link-dark rounded">Personal Information</a></li>

                              <li class="{{ Request::is('id-verification*') ? 'active' : '' }}">
                                <a href="/id-verification" class="link-dark rounded">ID verification</a></li>

                              <li class="{{ Request::is('payment-for-our-service*') ? 'active' : '' }}" ><a href="/payment-for-our-service" class="link-dark rounded">Payment for our services</a></li>
                            </ul>
                          </div>
                        </li>

                        <li class="mb-4">
                          <button class="cs-btn btn-toggle align-items-center rounded collapsed px-4" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Taxes & Deductions
                          </button>
                          <div class="collapse" id="dashboard-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li class="{{ Request::is('tax-filing*') ? 'active' : '' }}">
                                <a href="{{ route('tax-filing') }}" class="link-dark rounded">Tax Filing</a>
                             </li>

                                <li class="{{ Request::is('estimate-payments*') ? 'active' : '' }}">
                                    <a href="{{ route('estimate-payments') }}" class="link-dark rounded">Estimate and Other Payments</a>
                                </li>
                                <li class="{{ Request::is('stimulus*') ? 'active' : '' }}">
                                    <a href="{{ route('stimulus') }}" class="link-dark rounded">Stimulus</a>
                                </li>

                                <li class="{{ Request::is('advanced-child-tax-credit-payments-received*') ? 'active' : '' }}">
                                    <a href="{{ route('advanced-child-tax') }}" class="link-dark rounded">Advanced child tax credit payments</a>
                                </li>
                            </ul>
                          </div>
                        </li>

                        <li class="mb-4">
                          <button class="cs-btn btn-toggle align-items-center rounded collapsed px-4" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                            Income
                          </button>
                          <div class="collapse" id="orders-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li class="{{ Request::is('wages*') ? 'active' : '' }}"><a href="/wages" class="link-dark rounded">Wages</a></li>
                              <li  class="{{ Request::is('foreign-income*') ? 'active' : '' }}">
                                <a href="{{route('foreign-income')}}" class="link-dark rounded">Foreign Earned Income</a>
                              </li>
                              <li  class="{{ Request::is('business-income*') ? 'active' : '' }}">
                                <a href="{{route('business-income')}}" class="link-dark rounded">Business Income</a>
                              </li>
                              <li  class="{{ Request::is('passive-income*') ? 'active' : '' }}">
                                <a href="{{route('passive-income')}}" class="link-dark rounded">Investment and Passive Income</a>
                              </li>
                              <li class="{{ Request::is('rental-income*') ? 'active' : '' }}">
                                <a href="{{route('rental-income')}}" class="link-dark rounded">Rental Income & Sale of Property</a>
                              </li>
                            </ul>
                          </div>
                        </li>

                        <li class="mb-4">
                          <button class="cs-btn btn-toggle align-items-center rounded collapsed px-4" data-bs-toggle="collapse" data-bs-target="#foreign-collapse" aria-expanded="false">
                            Foreign Account & Entities
                          </button>
                          <div class="collapse" id="foreign-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li class="{{ Request::is('fbr-8938*') ? 'active' : '' }}">
                                <a href="{{route('FBR8938')}}" class="link-dark rounded" class="link-dark rounded">FBR and 8938</a>
                              </li>
                              <li class="{{ Request::is('5471-foreign-corporation*') ? 'active' : '' }}">
                                <a href="{{route('five471')}}" class="link-dark rounded" class="link-dark rounded">5471 Foreign Corporation</a>
                              </li>
                              <li class="{{ Request::is('3520-foreign-trusts*') ? 'active' : '' }}">
                                <a href="{{route('thirty520')}}"  class="link-dark rounded">3520 Foreign</a>
                              </li>

                            </ul>
                          </div>
                        </li>

                        <li class="mb-4">
                          <button class="cs-btn btn-toggle align-items-center rounded collapsed px-4" data-bs-toggle="collapse" data-bs-target="#corporate-collapse" aria-expanded="false">
                            Corporate Taxes
                          </button>
                          <div class="collapse" id="corporate-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li class="{{ Request::is('c-corporations*') ? 'active' : '' }}">
                                    <a href="{{route('c-corporations')}}" class="link-dark rounded">C-Corporation</a>
                                </li>
                                <li class="{{ Request::is('s-corporations*') ? 'active' : '' }}">
                                    <a href="{{route('s-corporations')}}" class="link-dark rounded">S-Corporation</a>
                                </li>
                                <li class="{{ Request::is('partnership*') ? 'active' : '' }}">
                                    <a href="{{route('partnership')}}" class="link-dark rounded">Partnerships</a>
                                </li>
                                <li class="{{ Request::is('foreign-corporation-112DF*') ? 'active' : '' }}">
                                    <a href="{{route('foreign-corporation-112DF')}}" class="link-dark rounded">Foreign Corporation 112DF</a>
                                </li>
                                <li class="{{ Request::is('not-profit*') ? 'active' : '' }}">
                                    <a href="{{route('not-profit')}}" class="link-dark rounded">Not Profit</a>
                                </li>
                            </ul>
                          </div>
                        </li>

                        <li class="mb-4">
                          <button class="cs-btn btn-single-item align-items-center rounded collapsed px-4"  aria-expanded="false">
                           <a href="#"> Summary </a>
                          </button>

                        </li>

                      </ul>


                </nav>



              <div class="clear-both"></div>
            </div>

            <div class="col-md-9 main-content-wrapper">
              <!-- Content Start Here -->
                 @yield('content')
              <!-- Content Ends Here -->

              
               <!-- Modal -->
                                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h6 class="modal-title" id="exampleModalLabel">Add Comment:</h6>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                      
                                                      <form>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                      </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                      
                                                      <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
              
            </div>

        </div>

      </div>

  <!--   <footer  id="footer" class="text-muted py-5  bottom">
      xc
    </footer> -->

    </div>

  </div>

</main>


    </div>




     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/all.min.js') }}"></script> -->
   <script>

           $('.sidebar-nav li ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
   </script>

   
   <script>
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;
         let activeLink = $('.active').parent().parent();
         activeLink.addClass('show')
        // passes on every "a" tag
        $(".sidebar-nav li ul li a").each(function() {
            // checks if its the same on the address bar show
             if (url == (this.href)) {



            }
        });
    });


</script>

@yield('js')




  @livewireScripts
  </body>



</html>
