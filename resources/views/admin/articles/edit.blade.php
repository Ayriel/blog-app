@extends('admin.template.main')

@section('title', 'Editación del articulo - ' . $article->title )

@section('content')


{!! Form::open(['route' => ['articles.update', $article], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Titulo') !!}
        {!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required']) !!}
    <h6> {{ $errors->first('title') }}</h6>
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control', 'placeholder' => 'Seleccione categoria', 'required']) !!}
        <h6> {{ $errors->first('category_id') }}</h6>

    </div>

    <div class="form-group">
        {!! Form::label('content', 'Contenido') !!}
        {!! Form::textarea('content',$article->content, ['class' => 'form-control', 'placeholder' => 'Contenido...', 'required']) !!}
        <h6> {{ $errors->first('content') }}</h6>

    </div>
    <div class="form-group">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::select('tags[]' ,$tags , $my_tags, ['class' => 'form-control', 'multiple', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar articulo', ['class' => 'btn btn-primary']) !!}
    </div>


{!! Form::close() !!}



@endsection
