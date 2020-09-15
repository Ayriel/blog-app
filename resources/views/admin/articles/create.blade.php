@extends('admin.template.main')

@section('title', 'Agregar articulos')

@section('content')


{!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true, 'id' => 'form']) !!}

    <div class="form-group article-group">
        {!! Form::label('title', 'Escribe un titulo') !!}
        {!! Form::text('title', null, ['class' => 'form-control article-input', 'placeholder' => 'Titulo del articulo', 'autofocus']) !!}
        <h6 class="text-danger errorTitle"> {{ $errors->first('title') }}</h6>
        <b><span class="alert-title text-danger">Este campo no puede estar vacío</span></b>
    </div>

    <div class="form-group article-group">
        {!! Form::label('category_id', 'Selecciona una categoria') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control chosen-select', 'tabindex' => '7', 'placeholder' => 'Seleccione categoria']) !!}
        <h6 class="text-danger"> {{ $errors->first('category_id') }}</h6>
        <b><span class="alert-cat text-danger">Debe seleccionar una categoría</span></b>

    </div>


    <div class="form-group article-group">
        {!! Form::label('tags', 'Selecciona uno o varios tags') !!}
        {!! Form::select('tags[]' ,$tag , null, ['class' => 'form-control chosen-select inTag', 'multiple', 'tabindex'=>'4']) !!}
        <h6 class="text-danger"> {{ $errors->first('tags') }}</h6>
        <b><span class="alert-tag text-danger">Debe seleccionar un tag</span></b>

    </div>

    <div class="form-group article-group">
        {!! Form::label('content', 'Escribe aquí tu contenido') !!}
        {!! Form::textarea('content',null, ['class' => 'form-control trumbowyg', 'placeholder' => 'Contenido...']) !!}
        <h6 class="text-danger"> {{ $errors->first('content') }}</h6>
        <b><span class="alert-cont text-danger">Este campo no puede estar vacío o faltan caracteres</span></b>

    </div>
    {{-- accept="image/*" para solo images--}}
    <div class="form-group article-group custom-file d-inline-block">
        {!! Form::label('image', 'Sube las imagenes de tu articulo') !!}
        {!! Form::file('image', ['multiple', 'name' => 'image[]', 'accept'=>'image/*', 'required']) !!}
        <h6 class="text-danger text-danger"> {{ $errors->first('image') }}</h6>
        <b><span class="alert-img text-danger">Debe seleccionar una imagen</span></b>

        <button class=" border-0"></button>
    </div>


    <div class="form-group">
        {!! Form::submit('Agregar articulo', ['class' => 'btn btn-primary buttomSend']) !!}
    </div>

{!! Form::close() !!}



@endsection
