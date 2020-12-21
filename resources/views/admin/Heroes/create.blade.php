@extends('layouts.app')

@section('content')
<form action="{{ route('admin.Heroes.store') }}" method="post">
    @csrf
    <legend>Crear Nuevo Heroe</legend>
    <div class="mb-3">
        <label  class="form-label">Nombre</label>
        <input type="text"  class="form-control" id="name" name="name"placeholder="Ingrese un Nombre" required>
    </div>
    <div class="mb-3">
        <label  class="form-label">HP</label>
        <input type="number" id="hp" class="form-control"  name="hp" placeholder="Ingrese la Vida" required>
    </div>
    <div class="mb-3">
        <label  class="form-label">Ataque</label>
        <input type="number" id="atq" class="form-control" name="atq" placeholder="Ingrese el Ataque" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Defensa</label>
        <input type="number" id="def" class="form-control" name="def" placeholder="Ingrese la Defensa" required>
    </div>
    <div class="mb-3">
        <label  class="form-label">Suerte</label>
        <input type="number" id="luck" class="form-control" name="luck" placeholder="Ingrese la Suerte" required>
    </div>
    <div class="mb-3">
        <label  class="form-label">Monedas</label>
        <input type="number" id="coins" name="coins" class="form-control" placeholder="Ingrese las Monedas" required>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection