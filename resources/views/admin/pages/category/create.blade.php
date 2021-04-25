@extends('admin.layout.app')
@section('content')

<div class="card">
  <div class="card-body">
    <div class="card-header">
      <h3>Add Category</h3>
    </div>
    <form method="POST" action="{{ route('category.store') }}">
      @csrf
        <div class="mb-3 mt-5">
          <label for="title" class="form-label">Category Name</label>
          <input type="text" name="name" placeholder="Category name" class="form-control">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Category description</label>
         <input type="textarea" name="description"  placeholder="description" class="form-control">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Parent Category </label>
        <select name="parent_id" id="cars" class="form-control">
          <option value="0">No parent</option>
          @foreach($category as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach

        </select>
        </div>
        <input type="submit" name="" class="btn btn-success" value="Add category">
    </form>
  
  </div>
  
</div>

@endsection
      <!-- main-panel ends -->
