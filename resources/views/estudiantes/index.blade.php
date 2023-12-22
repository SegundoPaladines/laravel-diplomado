@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Nombres </th>
            <th scope="col">Id programa</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{$estudiante->id}}</td>
                <td>{{$estudiante->apellidos}}</td>
                <td>{{$estudiante->nombres}}</td>
                <td>{{$estudiante->id_programa}}</td>
                <td>
                    <button type="button" class="btn btn-primary" value="{{$estudiante->id}}">Editar</button>
                    <button type="button" class="btn btn-danger" value="{{$estudiante->id}}">Eliminar</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
