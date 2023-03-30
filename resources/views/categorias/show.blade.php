@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8 text-white">
    <div class="flex justify-center">
        <h1 style="color: #fff; font-size: 2em;">Categorias Page</h1>
    </div>

    <div class="flex justify-center">
        <p style="color: #fff; font-size: 1em; font-weight: 200;">This is about page.</p>
    </div>

        <div style="color: #fff;">
            <h3 style="font-size: 1.2em; font-weight: bold;">{{ $categoria['nome'] }}</h3>
            <li>
                <tr>
                    <td>id: {{ $categoria['id'] }},</td>
                    <td>nome: {{ $categoria['nome'] }},</td>
                </tr>
            </li>
        </div>

</div>
@endsection