@extends ('layouts.app')
@section ('content')

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Kritin Kartikeya</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      <p>
        <a href="/create" class="btn btn-primary my-2">Create Album</a>
        <a href="/register" class="btn btn-secondary my-2">Register</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">

        @foreach ($albums as $album)


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="{{ URL::to('/') }}/covers/{{$album->coverimage}}">
            <div class="card-body">
              <p class="card-text">
                <b>{{$album->title}}</b>
                <hr>
                {{$album->description}}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">{{$album->created_at->diffForHumans()}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
@endsection
