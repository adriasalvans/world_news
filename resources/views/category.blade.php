

@extends('layout')

@if($category->name == 'Home')
    @section('title', 'World news in real time')
@else
    @section('title',$category->name )
@endif

@section('content')


@include('elements.breadcrumbs')


@include('elements.news_row')
@include('elements.news_row')
@include('elements.news_row')

@endsection