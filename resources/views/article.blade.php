
@extends('layouts.layout')

@section('title')
{{$article -> category ->name}}
@endsection


@auth

@include('mypage.my_navbar')

@else
@include('elements.navbar')
@endif


@section('content')

@auth
<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('mypage') }}">Mypage</a></li>
    <li class="breadcrumb-item active" aria-current="page">Article</li>
    </ol>
</nav>
<br>

<style>
body{background-color: rgb(241, 175, 175);}
a {color:black;}
</style>

@else

<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('category') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('category',$article -> category ->id ) }}">{{$article -> category ->name}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">Article</li>
    </ol>
    </nav>
<br>

@endif


<div class="card">

<div class="card-body">
    <h2 class="card-title">{{$article -> title}}</h2>
    <img class="news-img" src="{{ asset('images/' . $article->image) }}" alt="">
    <br>

    <p class="new">{{$article -> content}} </p>
</div>
</div>
<br>

<center>
  <br>
  <ul class= "pagination" style="max-width: 50px;">
  <li class="page-item can">
    
      <a class="page-link scroll" href="#top" tabindex="-1">Top</a>
  </li>
  </ul>
</center>


@endsection















