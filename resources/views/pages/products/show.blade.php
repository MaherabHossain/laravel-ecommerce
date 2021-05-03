  @extends('layout.app')

  @section('content')
<div class="row mt-20">
    <div class="col-md-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <?php $i=0;?>
      @foreach($product->image as $image)
        <div class="carousel-item  <?php if($i==0){echo 'active';} ?>">
          <!-- {{ asset('image/products/'.$image->image) }} -->
            <img class="d-block w-100" src="{{ asset('image/products/'.$image->image) }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <?php $i++;?>
      @endforeach
    </div>
    <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    </div>
    <div class="col-md-9">
        <div class="widget">
        <h3>{{$product->title}}</h3>
        </div>
        <h6>{{$product->price}} Taka.</h6>
        stock
        <span class="badge badge-primary"> {{ $product->quantity<1 ? 'No product Available' : $product->quantity }}</span>
          <br>
          Brand
        <span class="badge badge-primary"> {{ $product->brand->name }}</span> <br>
          Category
        <span class="badge badge-primary"> {{ $product->category->name }}</span>
        <hr>
        <div class="row">
          <div>
            <h6>Description</h6>
           {{ $product->description }}
          </div>
        </div>
    </div>
</div>
@endsection
