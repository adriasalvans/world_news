
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="index.html">World News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
            <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="#">World</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Economy</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Politics</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Sports</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Culture</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.create')}}">Sign up</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/login.html">Log in</a>
        </li>
    
        </ul>
    </div>
    </div>
</nav>