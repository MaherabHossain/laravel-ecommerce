@extends('admin.layout.app')
@section('content')

<div class="main-panel">

  <div class="content-wrapper">
     <h4 class="card-title">All category</h4>
    <div class="row">

      <div class="col-lg-12 grid-margin stretch-card">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Catagory name</th>
                  <th>Parent Category</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
                  @if($category->parent_id==0)
                    <td>No parent</td>
                  @else
                    <td>{{ $category->parent->name }}</td>
                  @endif
                  <td>
                    <a href="{{ route('category.edit',['id'=>$category->id]) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                   {!! Form::open(['url' => 'admin/categories/delete/'.$category->id,'method'=>'delete']) !!}
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
