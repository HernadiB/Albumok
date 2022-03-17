@extends("layouts.main")
@section("title", "Create album")
@section("content")
    <h1 class="text-center my-3">Create album</h1>

    {!! Form::open(['route' => 'album-admin.store', "method" => "post", "enctype" => "multipart/form-data"]) !!}
    <div class="row">
        <div class="col-4">
            {{Form::label('artist','Artist')}}
            <br>
            {{Form::text('artist', $value = old('artist'))}}
        </div>
        <div class="col-4">
            {{Form::label('title','Title')}}
            <br>
            {{Form::text('title', $value = old('title'))}}
        </div>
        <div class="col-4">
            {{Form::label('genre','Genre')}}
            <br>
            {{Form::text('genre', $value = old('genre'))}}
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            {{Form::label('released','Released')}}
            <br>
            {{Form::number('released', $value = old('released'))}}
        </div>
        <div class="col-4">
            {{Form::label('copies','Total certified copies')}}
            <br>
            {{Form::text('copies', $value = old('copies'))}}
        </div>
        <div class="col-4">
            {{Form::label('sales','Claimed sales')}}
            <br>
            {{Form::text('sales', $value = old('sales'))}}
        </div>
        <div class="col">
            {{Form::label('cover','Cover')}}
            {!! Form::file("Choose file") !!}
        </div>
    </div>
        {{Form::submit('Save', ['class' => 'btn btn-warning w-50 my-auto btn-outline-dark'])}}

        {!! Form::close() !!}


@endsection
