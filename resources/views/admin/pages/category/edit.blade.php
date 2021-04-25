@extends('admin.layout.app')
@section('content')

<div class="card">
  <div class="card-body">
    <div class="card-header">
      <h3>Edit Category</h3>
    </div>
    <form method="POST" action="{{ route('category.update',['id'=>$category_edit->id]) }}">
      @csrf
      {{ method_field('PUT') }}
        <div class="mb-3 mt-5">
          <label for="title" class="form-label">Category Name</label>
          <input type="text" name="name" placeholder="Category name" value="{{ $category_edit->name }}" class="form-control">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Category description</label>
          <input type="textarea" name="description" value="{{ $category_edit->description }}" placeholder="description" class="form-control">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Parent Category </label>
        <select name="parent_id" id="cars" class="form-control">
          @if($category_edit->parent_id)
          <option value="{{ $category_edit->id }}">{{ $category_edit->parent->name }}</option>
          @else
          <option value="">No parent</option>
          @endif
          @foreach($category as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach

        </select>
        </div>
        <input type="submit" name="" class="btn btn-success" value="Save change">
    </form>
  
  </div>
  
</div>

@endsection
      <!-- main-panel ends -->
