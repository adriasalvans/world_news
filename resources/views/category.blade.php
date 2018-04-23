@extends('layouts.layout')

@if($category->name == 'Home')
    @section('title', 'World news in real time')
@else
    @section('title',$category->name )
@endif


@include('elements.navbar')


@section('content')

<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('category') }}">Home</a></li>
    @if($category->name != 'Home')
    <li class="breadcrumb-item active" aria-current="page">{{$category ->name}}</li>
    </ol>
    @endif
</nav>
<br>
@include('elements.news')

@endsection