@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8 text-white">
    <div class="flex justify-center">
        <h1 style="color: #fff; font-size: 2em;">Edite o usuário: {{ $user['name'] }}</h1>
    </div>
    <form autocomplete="off" action="{{ route('users.store') }}" method="POST" class="d-flex flex-column justify-content-center">
        @csrf
        <div class="form-group">
          <label for="input_name">Defina um nome de usuario:</label>
          <input type="text" name="input_name" id="input_name" value="{{ $user['name'] }}" class="form-control" placeholder="Nome" aria-describedby="help_name">
          @error('input_name')
            <small id="help_name" class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="input_email">Coloque um email valido:</label>
          <input type="email" name="input_email" id="input_email" value="{{ $user['email'] }}" class="form-control" placeholder="Email" aria-describedby="help_email">
          @error('input_email')
            <small id="help_email" class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="input_password">Defina uma senha:</label>
          <input type="password" name="input_password" id="input_password" value="" class="form-control" placeholder="Senha" aria-describedby="help_password">
          @error('input_password')
            <small id="help_password" class="text-danger">{{ $message }}</small>
          @enderror
        </div>
          
        <button type="submit" class="btn btn-primary">Criar Usuário</button>
    </form>

</div>
@endsection