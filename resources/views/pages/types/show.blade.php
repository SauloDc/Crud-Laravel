@extends('layouts.app')

@section('content')
    <a class='btn btn-primary' style="float: right;" href="{{route('type.index')}}">Voltar</a>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>Id</t>
                <th>Label</th>
                <th>Descriçao</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>{{ $type->id }}</td>
                <td>{{ $type->label }}</td>
                <td>{{ $type->description }}</td>
            </tr>
        </tbody>
    </table> 