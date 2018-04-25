@extends('layouts.layout')

@section('title','My News')

@include('mypage.my_navbar')

@section('content')

<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="#">Mypage</a></li>
    </ol>
</nav>
<br>


<style>
body{background-color: rgb(241, 175, 175);}
a {color:black;}
</style>

@include('mypage.my_news')

@endsection