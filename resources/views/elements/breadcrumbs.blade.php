

<br>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    @if($category->name != 'Home')
    <li class="breadcrumb-item active" aria-current="page">{{$category ->name}}</li>
    </ol>
    @endif
</nav>

<br>