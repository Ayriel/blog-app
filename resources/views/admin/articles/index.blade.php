@extends('admin.template.main')

@section('title', 'Agregar articulos')

@section('content')

<div class="mt-3">

    <a href="{{ route('articles.create') }}" class="ml-4 btn btn-info">Registrar nuevo Articulo</a>

    {{-- BUSCADOR DE TAGS --}}
    {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form float-right']) !!}
        <div class="form-group d-flex mr-4">
            {!! Form::text('title', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar articulo']) !!}
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
    {!! Form::close() !!}

    {{-- FIN BUSCADOR DE TAGS --}}

</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Titulo</th>
        <th scope="col">Categoría</th>
        <th scope="col">User</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->category->name }}</td>
                <td>{{ $article->user->name }}</td>

                <td>
                    <a href="{{ route('articles.destroy', $article->id) }}" class="btn btn-danger" onclick="return confirm('Seguro que deseas eliminar el articulo: {{ $article->title }} ?')">

                        <div class="icon">
                                <i class="icofont-ui-delete">

                                </i>
                            </div>

                        </a>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">
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

      {!! $articles->render() !!} {{-- para que funciones la paginación  --}}
  </div>
@endsection
