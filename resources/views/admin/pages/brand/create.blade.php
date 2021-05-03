@extends('admin.layout.app')
@section('content')

<div class="card">
  <div class="card-body">
    <div class="card-header">
      <h3>Add Category</h3>
    </div>
    <form method="POST" action="{{ route('brand.store') }}">
      @csrf
        <div class="mb-3 mt-5">
          <label for="title" class="form-label">Brand Name</label>
          <input type="text" name="name" placeholder="brand name" class="form-control">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Brand description</label>
         <input type="textarea" name="description"  placeholder="description" class="form-control">
        </div>
        <input type="submit" name="" class="btn btn-success" value="Add brand">
    </form>
  
  </div>
  
</div>

@endsection
      <!-- main-panel ends -->
