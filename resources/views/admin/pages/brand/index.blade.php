@extends('admin.layout.app')
@section('content')

<div class="main-panel">

  <div class="content-wrapper mt-5">
     <h4 class="card-title">All Brand</h4>
    <div class="row">

      <div class="col-lg-12 grid-margin stretch-card">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Brand name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($brands as $brand)
                <tr>
                  <td>{{ $brand->id }}</td>
                  <td>{{ $brand->name }}</td>
                  <td>
                    <a href="{{ route('brand.edit',['id'=>$brand->id]) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                   {!! Form::open(['url' => 'admin/brand/delete/'.$brand->id,'method'=>'delete']) !!}
                      <button class="btn btn-danger" style="margin-top: 2px" onclick="return confirm('Are you sure')"><i class="fa fa-trash"></i></button>
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
