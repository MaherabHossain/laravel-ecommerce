
<!DOCTYPE html>
<html>
<head>
    <title>Ecommerce</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

 <div class="wrapper">
     
        <!-- Nav start -->
         <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                  </ul>
                  <form class="d-flex mt-20">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search your desired product or brand here" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
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
     <footer class="mt-20 bg-primary padding-2">
         <p class="text-center">&copy; 2020 all right reserved by <strong>AmarDokan</strong></p>
     </footer>
 </div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>