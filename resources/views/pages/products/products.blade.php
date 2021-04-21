  @extends('layout.app')

  @section('content')
<div class="row mt-20">
    <div class="col-md-3">
        @include('parts.side-bar')
    </div>
    <div class="col-md-9">
        <div class="widget">
            <h3>Feture product</h3>
        </div>
        <div class="row">
          @foreach($products as $product)
            <div class="col-md-4 ">
                <div class="card">
                  <?php $i = 1;?>
                  @foreach($product->image as $image)
                  <?php $img = "image/products/".$image->image; ?>
                  <img src="{{ asset($img) }}" class="card-img-top " alt="..." style="max-height: 150px">
                   <?php if($i==1) break;?>
                  @endforeach
                  <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{ $product->price }} Tk.</p>
                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection