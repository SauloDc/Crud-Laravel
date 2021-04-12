@extends('layouts.app')

@section('content')
    <form class="form-group" action="{{route('type.store')}}" method="post">
        @include('pages.types._partials.form')
    </form>