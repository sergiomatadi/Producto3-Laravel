
<div class="container">
@extends('layout/header')

@if(Session::has('menssage'))
{{ Session::get('message')}}
@endif
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>NIF</th>
            <th>Fecha de registro</th>
            <th>Acciones</th>


        <tr>
    </thead>
    <tbody>
    @foreach( $students as $students )
        <tr>
            <td>{{ $students->id }}</td>
            <td>{{ $students->name }}</td>
            <td>{{ $students->username }}</td>
            <td>{{ $students->email }}</td>
            <td>{{ $students->name }}</td>
            <td>{{ $students->telephone }}</td>
            <td>{{ $students->nif }}</td>
            <td>{{ $students->date_registered }}</td>
            <td>
            
            <a href="{{ url('/students/'.$students->id.'/edit') }}"class="text-decoration-none"><input type="submit" style="text-decoration:none" value="Editar">
     
            </a>    
       

            <form action="{{ url('/students/'.$students->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Quieres eliminar?')" value="Borrar">
            </form>

            </td>

        </tr>
    @endforeach
    </tbody>
</table>
</div>
