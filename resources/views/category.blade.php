

@extends('layout')

{{--@if({{$category ->name}}==='Home')
@section('title', 'World news in real time')
@else --}}

@section('title')
{{$category ->name}}
@endsection

{{--@endif--}}

@section('content')


<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
</nav>

<!-- <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
</nav> -->



<br>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <a href="pages/category/news_world.html"> <img class="d-block w-100" src="images/img1.png" alt="First slide" title="Read more"></a>
    </div>
    <div class="carousel-item">
        <a href="pages/category/news_world.html"><img class="d-block w-100" src="images/img2.png" alt="Second slide" title="Read more"></a>
    </div>
    <div class="carousel-item">
        <a href="pages/category/news_world.html"><img class="d-block w-100" src="images/img3.png" alt="Third slide" title="Read more"></a>
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
</div>


<div class="row">
<div class="col-sm-4 my-4">
    <div class="card">
    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
    <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
    </div>
    <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
    </div>
    </div>
</div>
<div class="col-sm-4 my-4">
    <div class="card">
    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
    <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
    </div>
    <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
    </div>
    </div>
</div>
<div class="col-sm-4 my-4">
    <div class="card">
    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
    <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
    </div>
    <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
    </div>
    </div>
</div>
</div>




<div class="row">
    <div class="col-sm-4 my-4">
    <div class="card">
        <img class="card-img-top" src="http://placehold.it/300x200" alt="">
        <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
        </div>
        <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
        </div>
    </div>
    </div>
    <div class="col-sm-4 my-4">
    <div class="card">
        <img class="card-img-top" src="http://placehold.it/300x200" alt="">
        <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
        </div>
        <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
        </div>
    </div>
    </div>
    <div class="col-sm-4 my-4">
    <div class="card">
        <img class="card-img-top" src="http://placehold.it/300x200" alt="">
        <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
        </div>
    </div>
    </div>
</div>

<center>
<ul class="pagination" style="max-width: 247.89px;">
    <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active">
        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
        </li>
    <li class="page-item can"><a class="page-link" href="page2.html">2</a></li>
    <li class="page-item can"><a class="page-link" href="page3.hmtl">3</a></li>
    <li class="page-item can">
        <a class="page-link" href="page2.html">Next</a>
    </li>
    </ul>
</center>


@endsection