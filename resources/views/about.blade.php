@extends('layout')

@section('title', 'About') {{-- O segundo argumento é basicamente o conteúdo da section --}}

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8 text-white">
        <div class="flex justify-center">
            <h1 style="color: #fff; font-size: 2em;">About Page</h1>
        </div>

        <div class="flex justify-center">
            <p style="color: #fff; font-size: 1em; font-weight: 200;">This is about page.</p>
        </div>

        </div>
    </div>
@endsection