@extends ('layouts.app')
@section ('content')
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      <div class="col-md-12">

<form enctype="multipart/form-data"  method="POST" action="/albums">
  {{ csrf_field() }}
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="description"></textarea>
    </div>
  </div>

  <div class="custom-file">
    <div class="ml-auto col-sm-10">
      <input type="file" class="custom-file-input" name="coverimage">
      <label class="custom-file-label" for="validatedCustomFile">Choose Cover Image...</label>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
  @include ('errors')
</div>
</div>
</div>
</div>
@endsection
