@extends('layouts.app')

@section('content')
    <form class="form-group" action="{{route('type.update', $type->id)}}" method="post">
        @method('PUT')
        @include('pages.types._partials.form')
    </form>