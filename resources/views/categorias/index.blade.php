@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8 text-white">
    <div class="flex justify-center">
        <h1 style="color: #fff; font-size: 2em;">Categorias</h1>
    </div>

    <div class="flex justify-center">
        <a name="" id="" class="btn btn-primary" href="{{ route('categorias.create') }}" role="button">Criar categoria</a>
    </div>

    <div class="flex justify-center">
        <p style="color: #fff; font-size: 1em; font-weight: 200;">Crie, edite e exclua qualquer categoria:</p>
    </div>
    
    <table class="table table-responsive bg-light">
        <thead class="thead-inverse">
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>quantidade de usuarios</th>
            </tr>
            </thead>
            <tbody>
            
                @if (count($categorias) > 0)
                    @foreach ($categorias as $categoria)
                    
                        <tr>
                            <td scope="row">
                                <a href="{{ route('categorias.show', ['categoria' => $categoria['id']]) }}">
                                    {{ $categoria['id'] }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('categorias.show', ['categoria' => $categoria['id']]) }}">
                                    {{ $categoria['nome'] }}
                                </a>
                            </td>
                        </tr>
                    

                    @endforeach
                @else
                    <div style="color: #fff;">
                        <h3>No have categorias.</h3>
                    </div>
                @endif

            </tbody>
            </table>
</div>
@endsection