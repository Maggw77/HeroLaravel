@extends('layouts.app')

@section('content')
<h1>Listado de Heroes</h1>
<div>
  <a href="{{ route('admin.Heroes.create') }}" class="btn btn-primary  mb-2 mt-2">Crear</a>
</div>
<div class="row">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>HP</th>
        <th>ATQ</th>
        <th>DEF</th>
        <th>LUCK</th>
        <th>MONEDAS</th>
        <th>EXPERIENCIA</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($heroes as $heroe)
      <tr>
        <td>{{$heroe->id}}</td>
        <td>{{$heroe->name}}</td>
        <td>{{$heroe->hp}}</td>
        <td>{{$heroe->atq}}</td>
        <td>{{$heroe->def}}</td>
        <td>{{$heroe->luck}}</td>
        <td>{{$heroe->coins}}</td>
        <td>{{$heroe->xp}}</td>
        <td>
          <div class="row">
            <div class="col">
              <a href="{{ route('admin.Heroes.edit',['id' => $heroe->id]) }}" class="btn btn-success  mb-2 mt-2">Modificar</a>
            </div>
            <div class="col">
              <form action="{{route('admin.Heroes.destroy',['id' => $heroe->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
              </form>
            </div>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection