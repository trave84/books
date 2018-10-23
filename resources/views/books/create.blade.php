@extends ('layouts.app')

@section ('content')

<form action="{{ action('BookController@store') }}" method="post">
@csrf

  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control">
  </div>

  <div class="form-group">
    <label>Authhor</label>
    <input type="text" name="authors" class="form-control">
  </div>
  <div class="form-group">
    <label>Image</label>
    <input type="text" name="image" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection