
<!DOCTYPE html>
<html>
<head>
    <title>Ecommerce</title>
    <!-- CSS only -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

 <div class="wrapper">
     <div class="">
        <!-- Nav start -->
         <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
            
              <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index') }}"><strong>AmarDokan</strong></a>
                
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex mt-20" method="get" action="{{ route('search') }}">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search product " aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                      </div>
                    </form>
                    </li>
                   
                  </ul>
                </div>
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   @guest
                          @if (Route::has('login'))
                              <li class="nav-item">
                                  <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                          @endif

                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                        @endguest
                      </ul>
                </div>
              </div>
            </div>
            </div>
        </nav>
        <!-- Nav end -->
        <div class="container">
       <!-- start sidebar+content -->
      @yield('content')

       <!-- end sidebar+content -->
     </div>
     <div class="">
       <footer class="mt-20 bg-primary padding-2 ">
           <p class="text-center">&copy; 2020 all right reserved by <strong>AmarDokan</strong></p>
       </footer>
     </div>
 </div>


<!-- JavaScript Bundle with Popper -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>