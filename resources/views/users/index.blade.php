@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8 text-white">
    <div class="flex justify-center">
        <h1 style="color: #fff; font-size: 2em;">Users</h1>
    </div>

    <div class="flex justify-center">
        <a name="" id="" class="btn btn-primary" href="{{ route('users.create') }}" role="button">Criar user</a>
    </div>

    <div class="flex justify-center">
        <p style="color: #fff; font-size: 1em; font-weight: 200;">Crie, edite e exclua qualquer user:</p>
    </div>
    <table class="table table-responsive bg-light">
        <thead class="thead-inverse">
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>categoria</th>
            </tr>
            </thead>
            <tbody>
            
                @if (count($users) > 0)
                    @foreach ($users as $user)
                    
                    <tr>
                        <td scope="row">{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['categorias'] }}</td>
                    </tr>

                    @endforeach
                @else
                    <div style="color: #fff;">
                        <h3>No have users.</h3>
                    </div>
                @endif

            </tbody>
            </table>
</div>
@endsection