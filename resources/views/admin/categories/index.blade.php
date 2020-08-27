@extends('admin.template.main')

@section('title', 'Listado de categorias')

@section('content')

<div class="buttom mt-3">
    <a href="{{ route('categories.create') }}" class="btn btn-info">Registrar nueva categoria</a>
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
        @foreach ($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-danger">
                        {{-- <div class="icon-holder"> --}}
                            <div class="icon">
                                <i class="icofont-ui-delete">

                                </i>
                            </div>
                        {{-- </div> --}}
                    </a>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">
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
   {!! $categories->render() !!} {{-- para que funciones la paginación --}}

@endsection
