@extends('layouts.app')

@section('content')
    
    <form class="form-group" action="{{route('product.update', $product->id)}}" method="post">
        @method('PUT')
        @include('pages.products._partials.form')
    </form>