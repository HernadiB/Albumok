@extends("layouts.main")
@section("title", "Albums")
@section("content")
    <h1 class="text-center my-3">List of best-selling albums</h1>
    <div class="row">
        @foreach($albums as $album)
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h5 class="card-title text-center">{{$album->title}}</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset("img/" . $album->cover)}}" class="card-img-top img-thumbnail" alt="{{$album->cover}}">
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-warning w-100 details">Details</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
