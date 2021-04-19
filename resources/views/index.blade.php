  @extends('layout.app')

  @section('content')
<div class="row mt-20">
    <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            The current link item
          </a>
          <a href="#" class="list-group-item list-group-item-action">A second link item</a>
          <a href="#" class="list-group-item list-group-item-action">A third link item</a>
          <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
          <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
        </div>
    </div>

    <div class="col-md-9">
        <div class="widget">
            <h3>Feture product</h3>
        </div>
        <div class="row">
            <div class="col-md-4 ">
                <div class="card">
                  <img src="{{ asset('image/image.png') }}" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Samsung m10</h5>
                    <p class="card-text">25000 Tk.</p>
                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                  </div>
                </div>
            </div>
            <!-- can add 3 feature product -->
        </div>
    </div>
</div>
@endsection