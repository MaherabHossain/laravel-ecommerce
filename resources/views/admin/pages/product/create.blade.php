@extends('admin.layout.app')
@section('content')

<div class="card">
  <div class="card-body">
    <div class="card-header">
      <h3>Add product</h3>
    </div>
    @if(isset($product))
          {!! Form::model($product, [ 'route' => ['admin.product.edit', $product->id], 'method' => 'put' ]) !!}
    @else
        {!! Form::open(['route' => 'product.store','method'=>'post', 'enctype' => 'multipart/form-data']) !!}
      @endif
        <div class="mb-3">
          <label for="title" class="form-label">Tittle</label>
          {{ Form::text('title',NULL,['class' => 'form-control','id'=> 'title', 'placeholder'=> 'Title'])}}
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Description</label>
          {{ Form::textarea('description',NULL,['class' => 'form-control','id'=> 'title', 'placeholder'=> 'Description'])}}
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Quantity</label>
          {{ Form::number('quantity',NULL,['class' => 'form-control','id'=> 'title', 'placeholder'=> 'Quantity'])}}
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Price</label>
          {{ Form::number('price',NULL,['class' => 'form-control','id'=> 'title', 'placeholder'=> 'Price'])}}
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Offer Price</label>
          {{ Form::number('offer_price',NULL,['class' => 'form-control','id'=> 'title', 'placeholder'=> 'Offer Price'])}}
        </div>
<!--         <h3>images</h3>
        @foreach($image as $key => $image)
           <img src="{{asset('image/products/'.$image->image)}}" width="50px">
           <h6>{{ $key+=1 }}</h6>
        @endforeach -->
      <!--   <div class="row">

          <div class="col-md-4">
              <div class="mb-3">
                <label for="title" class="form-label">Product Image</label>
                {{ Form::file('image[0]',NULL,['class' => 'form-control','id'=> 'title', 'placeholder'=> 'Chose image'])}}
              </div>
           </div>
           <div class="col-md-4">
              <div class="mb-3">
                <label for="title" class="form-label">Product Image</label>
                {{ Form::file('image[]',NULL,['class' => 'form-control','id'=> 'title', 'placeholder'=> 'Chose image'])}}
              </div>
           </div>
           <div class="col-md-4">
              <div class="mb-3">
                <label for="title" class="form-label">Product Image</label>
                {{ Form::file('image[]',NULL,['class' => 'form-control','id'=> 'title', 'placeholder'=> 'Chose image'])}}
              </div>
           </div>
           <div class="col-md-4">
              <div class="mb-3">
                <label for="title" class="form-label">Product Image</label>
                {{ Form::file('image[]',NULL,['class' => 'form-control','id'=> 'title', 'placeholder'=> 'Chose image'])}}
              </div>
           </div>
           <div class="col-md-4">
              <div class="mb-3">
                <label for="title" class="form-label">Product Image</label>
                {{ Form::file('image[]',NULL,['class' => 'form-control','id'=> 'title', 'placeholder'=> 'Chose image'])}}
              </div>
           </div>         
        </div> -->

        <button type="submit" class="btn btn-primary">Add product</button>
    {!! Form::close() !!}
  </div>
  
</div>

@endsection
      <!-- main-panel ends -->
