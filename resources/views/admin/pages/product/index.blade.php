@extends('admin.layout.app')
@section('content')

<div class="main-panel">

  <div class="content-wrapper">
     <h4 class="card-title">All product</h4>
    <div class="row">
      <a href="{{ route('admin.product') }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add product</a>
      <div class="col-lg-12 grid-margin stretch-card">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Catagory</th>
                  <th>Brand</th>
                  <th>Title</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Offer Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                <tr>
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->category->name }}</td>
                  <td>{{ $product->brand->name }}</td>
                  <td>{{ $product->title }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->offer_price }}</td>
                  <td>{{ $product->ststus }}</td>
                  <td>
                   {!! Form::open(['url' => 'admin/product/delete/'.$product->id,'method'=>'delete']) !!}
                      <a href="{{ route('admin.product.edit',['id'=>$product->id]) }}" class="btn btn-success">Edit</a>
                      <button class="btn btn-danger" style="margin-top: 2px" onclick="return confirm('Are you sure')">Delete</button>
                    {!! Form::close() !!}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>


@endsection
      <!-- main-panel ends -->
