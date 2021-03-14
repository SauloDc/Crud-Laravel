@extends('layouts.app')

@section('content')
    <a class='btn btn-primary' style="float: right;" href="{{route('product.create')}}">Cadastrar</a>
    <table class="table table-bordered">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Tipo</td>
            <td>Preço</td>
            <td class="text-center">Ações</td>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->type->label }}</td>
                    <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                    <td class="text-center" style="display: blocks;">
                        <a class="btn btn-info" href="{{route('product.show', $product->id)}}">mostrar</a>
                        <a class="btn btn-warning" href="{{route('product.edit', $product->id)}}">editar</a>
                        <form action="{{route('product.destroy', $product->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 

