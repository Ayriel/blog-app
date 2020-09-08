@extends('admin.template.main')

@section('title', 'Agregar articulos')

@section('content')


{!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group article-group">
        {!! Form::label('title', 'Titulo') !!}
        {!! Form::text('title', null, ['class' => 'form-control article-input', 'placeholder' => 'Titulo del articulo', 'required']) !!}
        <h6> {{ $errors->first('title') }}</h6>
    </div>

    <div class="form-group article-group">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control chosen-select', 'tabindex' => '7', 'placeholder' => 'Seleccione categoria', 'required']) !!}
        <h6> {{ $errors->first('category_id') }}</h6>

    </div>


    <div class="form-group article-group">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::select('tags[]' ,$tag , null, ['class' => 'form-control chosen-select', 'multiple', 'tabindex'=>'4', 'required']) !!}
    </div>

    <div class="form-group article-group">
        {!! Form::label('content', 'Contenido') !!}
        {!! Form::textarea('content',null, ['class' => 'form-control trumbowyg', 'placeholder' => 'Contenido...', 'required']) !!}
        <h6> {{ $errors->first('content') }}</h6>

    </div>

    <div class="form-group article-group custom-file">
        {!! Form::label('image', 'Imagen') !!}
        {!! Form::file('image', ['multiple', 'name' => 'image[]']) !!}
        <h6> {{ $errors->first('image') }}</h6>
        <button type="button" id="obtener">OBTENER</button>

    </div>

    <div class="form-group">
        {!! Form::submit('Agregar articulo', ['class' => 'btn btn-primary']) !!}
    </div>


{!! Form::close() !!}



@endsection
