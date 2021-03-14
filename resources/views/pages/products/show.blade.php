@extends('layouts.app')

@section('content')
    <a class='btn btn-primary' style="float: right;" href="{{route('product.index')}}">Voltar</a>
    <table class="table table-bordered">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Tipo</td>
            <td>Preço</td>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->type->label }}</td>
                    <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                </tr>
        </tbody>
    </table> 

