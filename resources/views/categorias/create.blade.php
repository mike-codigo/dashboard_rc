@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8 text-white">
    <div class="flex justify-center">
        <h1 style="color: #fff; font-size: 2em;">Crie uma categoria</h1>
    </div>
    <form action="{{ route('categorias.store') }}" method="POST" class="d-flex flex-column justify-content-center">
        @csrf
        <div class="form-group">
          <label for="input_categoria">Defina um nome para a categoria:</label>
          <input type="text" name="input_categoria" id="input_categoria" value="{{ old('input_categoria') }}" class="form-control" placeholder="Nome da categoria" aria-describedby="helpId">
          @error('input_categoria')
            <small id="helpId" class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Criar categoria</button>
    </form>

</div>
@endsection