
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="{{ route('category') }}">World News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('category') }}">Home
            <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('category', 2) }}">World</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category', 3) }}">Economy</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category', 4) }}">Politics</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category', 5) }}">Sports</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category', 6) }}">Culture</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register')}}">Sign up</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login')}}">Log in</a>
        </li>
    
        </ul>
    </div>
    </div>
</nav>