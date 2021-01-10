@extends('layouts.app')

@section('content')
<h1>Listado de Items</h1>
<div>
  <a href="{{ route('Item.create') }}" class="btn btn-primary  mb-2 mt-2">Crear</a>
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
        <th>COST</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->hp}}</td>
        <td>{{$item->atq}}</td>
        <td>{{$item->def}}</td>
        <td>{{$item->luck}}</td>
        <td>{{$item->coins}}</td>
        <td>
          <div class="row">
            <div class="col">
              <a href="{{ route('Item.edit',['id' => $item->id]) }}" class="btn btn-success  mb-2 mt-2">Modificar</a>
            </div>
            <div class="col">
              <form action="{{route('Item.destroy',['id' => $item->id])}}" method="POST">
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