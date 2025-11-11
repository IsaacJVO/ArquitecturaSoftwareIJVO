@extends('layouts.app')
@section('title','Listado de Cursos')
@section('content')
<h1 class="text-2xl font-bold mb-4">Cursos</h1>
<a href="{{ route('cursos.create') }}" class="bg-blue-500 text-white px-4 py-2
rounded">Nuevo Curso</a>
<table class="table-auto w-full mt-4 border">
<thead>
<tr class="bg-gray-200">
<th class="px-4 py-2">Nombre</th>
<th class="px-4 py-2">Descripción</th>
<th class="px-4 py-2">Precio</th>
</tr>
</thead>
<tbody>
@foreach($cursos as $curso)
<tr>
<td class="border px-4 py-2">{{ $curso->nombre }}</td>
<td class="border px-4 py-2">{{ $curso->descripcion }}</td>
<td class="border px-4 py-2">{{ $curso->precio }}</td>
</tr>
@endforeach
</tbody>
</table>
@endsection