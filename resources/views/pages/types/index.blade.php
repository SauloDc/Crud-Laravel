@extends('layouts.app')

@section('content')

<a class='btn btn-secondary' style="float: right;" href="{{route('product.index')}}">Voltar</a>
<a class='btn btn-primary' style="float: right;" href="{{route('type.create')}}">Novo Tipo</a>

<table class="table table-bordered">
    <thead class="text-center">
        <tr>
            <th>#</t>
            <th>Label</th>
            <th>Descriçao</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach($types as $type)
        <tr>
            <td>{{ $type->id }}</td>
            <td>{{ $type->label }}</td>
            <td>{{ $type->description }}</td>
            <td class="text-center" style="display: blocks;">
                <a class="btn btn-info" href="{{route('type.show', $type->id)}}">mostrar</a>
                <a class="btn btn-warning" href="{{route('type.edit', $type->id)}}">editar</a>
                <form action="{{route('type.destroy', $type->id)}}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>