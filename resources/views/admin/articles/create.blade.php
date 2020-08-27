@extends('admin.template.main')

@section('title', 'Agregar articulos')

@section('content')


{!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Titulo') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required']) !!}
        <h6> {{ $errors->first('title') }}</h6>
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione categoria', 'required']) !!}
        <h6> {{ $errors->first('category_id') }}</h6>

    </div>

    <div class="form-group">
        {!! Form::label('content', 'Contenido') !!}
        {!! Form::textarea('content',null, ['class' => 'form-control', 'placeholder' => 'Contenido...', 'required']) !!}
        <h6> {{ $errors->first('content') }}</h6>

    </div>
    <div class="form-group">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::select('tags[]' ,$tag , null, ['class' => 'form-control', 'multiple', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Imagen') !!}
        {!! Form::file('image') !!}
        <h6> {{ $errors->first('image') }}</h6>

    </div>

    <div class="form-group">
        {!! Form::submit('Agregar articulo', ['class' => 'btn btn-primary']) !!}
    </div>


{!! Form::close() !!}



@endsection
