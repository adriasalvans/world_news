@extends('layouts.layout')

@section('title','My Settings')

@include('mypage.my_navbar')

@section('content')

<style>
body{background-color: rgb(241, 175, 175);}
a {color:black;}
</style>

<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('mypage') }}">Mypage</a></li>
    <li class="breadcrumb-item active" aria-current="page">My Settings</li>
    </ol>
</nav>
<br>

<center>

<div class="card">
<div class="card-body">
<div class="form-group">

    <div id="edit" style="text-align: center;">
    <br>
        <h5 style="font-weight: bold;">Edit user</h5>
        
        <form method="post" action="{{route('mypage.update')}}">
        {{ csrf_field() }}
        <br>
        <input type="text" name="name"  value="{{ auth()->user()->name }}" />
        
        <button type="submit">Send</button>
        </form>
    </div>

</div>
<br>
<hr style="border-width: 5px;">
<div class="form-group">

    <div id="edit" style="text-align: center;">
    <br><br>
        <h5 style="font-weight: bold;">Delete Account</h5>
        
        <br>
        <form method="post" action="{{route('mypage.delete')}}">
        {{ csrf_field() }}
        <button class="btn btn-danger" type="submit" onclick="return confirm('Deleting: Are you sure?')">Delete</button>
        </form>

    </div>

</div>

</div>
</div>
</center>

<br>

@endsection