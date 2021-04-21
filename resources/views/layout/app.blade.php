
<!DOCTYPE html>
<html>
<head>
    <title>Ecommerce</title>
    <!-- CSS only -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

 <div class="wrapper">
     <div class="container">
        <!-- Nav start -->
         <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            
              <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index') }}"><strong>AmarDokan</strong></a>
                
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('products') }}">Products</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li> -->
                    <!-- <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                  </ul>
                </div>
                  <form class="d-flex mt-20">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search product " aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
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
     <div class="container">
       <footer class="mt-20 bg-primary padding-2">
           <p class="text-center">&copy; 2020 all right reserved by <strong>AmarDokan</strong></p>
       </footer>
     </div>
 </div>


<!-- JavaScript Bundle with Popper -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->
</body>
</html>