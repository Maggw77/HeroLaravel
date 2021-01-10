@extends('layouts.app')

@section('content')
<form action="{{ route('admin.Heroes.update') }}" method="post">
    @csrf
    <legend>Editar Heroe</legend>
    <div class="mb-3">
        <label  class="form-label">Nombre</label>
        <input type="text"  class="form-control" id="name" name="name" value="{{ $hero->name}}" placeholder="Ingrese un Nombre" required>
    </div>
    <div class="mb-3">
        <label  class="form-label">HP</label>
        <input type="number" id="hp" class="form-control"  name="hp" value="{{ $hero->hp}}" placeholder="Ingrese la Vida" required>
    </div>
    <div class="mb-3">
        <label  class="form-label">Ataque</label>
        <input type="number" id="atq" class="form-control" name="atq" value="{{ $hero->atq}}" placeholder="Ingrese el Ataque" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Defensa</label>
        <input type="number" id="def" class="form-control" name="def" value="{{ $hero->def}}" placeholder="Ingrese la Defensa" required>
    </div>
    <div class="mb-3">
        <label  class="form-label">Suerte</label>
        <input type="number" id="luck" class="form-control" name="luck" value="{{ $hero->luck}}" placeholder="Ingrese la Suerte" required>
    </div>
    <div class="mb-3">
        <label  class="form-label">Monedas</label>
        <input type="number" id="coins" name="coins" value="{{ $hero->coins}}" class="form-control" placeholder="Ingrese las Monedas" required>
    </div>
    <button type="submit" class="btn btn-success">Editar</button>
</form>

@endsection