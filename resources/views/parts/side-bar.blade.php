<div class="list-group">

  @foreach(App\Models\Category::where('parent_id','=','0')->get() as $category)
<a href="#collapseExample" class="list-group-item list-group-item-action  " data-toggle="collapse" data-target="#collapse-{{ $category->id }}" aria-expanded="false" aria-controls="collapse-{{ $category->id }}">{{$category->name}}</a>

<div id="collapse-{{ $category->id }}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
	@foreach($category->child as $child)
      <a href=" {{ route('category.show',$child->id) }} " class="list-group-item list-group-item-action ml-2"  >{{$child->name}}</a>
      @endforeach
    </div>
  @endforeach
</div>