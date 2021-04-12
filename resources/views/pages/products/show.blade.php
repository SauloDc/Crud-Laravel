@extends('layouts.app')

@section('content')
    <a class='btn btn-primary' style="float: right;" href="{{route('product.index')}}">Voltar</a>
    <table class="table table-bordered" style="text-align: center;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Descriçao Tipo</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->type->label }}</td>
                <td>{{ $product->type->description }}</td>
                <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
            </tr>
        </tbody>
    </table> 

