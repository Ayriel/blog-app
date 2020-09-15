@extends('admin.template.main')

@section('title', 'Agregar categoría')

@section('content')

    {!! Form::open(['route' => 'categories.store']) !!}

    <div class="form-group">

        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria']) !!}
        <h6 class="text-danger"> {{ $errors->first('name') }}</h6>
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}

@endsection
