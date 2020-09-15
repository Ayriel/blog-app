@extends('admin.template.main')

@section('title', 'Listado de tags')

@section('content')

<div class="mt-3">
<a href="{{ route('tags.create') }}" class="ml-4 btn btn-info">Crear nuevo tag</a>


{{-- BUSCADOR DE TAGS --}}
    {!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'navbar-form float-right']) !!}
        <div class="form-group d-flex mr-4">
            {!! Form::text('name', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar tag']) !!}
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
    {!! Form::close() !!}

{{-- FIN BUSCADOR DE TAGS --}}

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tag as $tags)
            <tr>
                <th scope="row">{{ $tags->id }}</th>
                <td>{{ $tags->name }}</td>
                <td>
                    <a href="{{ route('tags.destroy', $tags->id) }}" class="btn btn-danger" onclick="return confirm('Seguro que deseas eliminar el tag: {{ $tags->name }} ?')">
                        {{-- <div class="icon-holder"> --}}
                            <div class="icon">
                                <i class="icofont-ui-delete">

                                </i>
                            </div>
                        {{-- </div> --}}
                    </a>
                    <a href="{{ route('tags.edit', $tags->id) }}" class="btn btn-warning">
                        <div class="icon">
                            <i class="icofont-ui-edit">

                            </i>
                        </div>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

  <div class="pagination">

   {!! $tag->render() !!} {{-- para que funciones la paginación --}}
  </div>
@endsection
