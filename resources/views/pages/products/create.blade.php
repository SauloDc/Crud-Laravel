@extends('layouts.app')

@section('content')
    <form class="form-group" action="{{route('product.store')}}" method="post">
        @include('pages.products._partials.form')
    </form>