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
<div class="card-body" style="text-align: center;">
<div class="form-group row">

    <div id="edit" style="text-align: center;">
        <h5 style="font-weight: bold;">Edit user</h5>
        <form method="post" action="{{route('mypage.update')}}">
        {{ csrf_field() }}

        <input type="text" name="name"  value="{{ auth()->user()->name }}" />

        <button type="submit">Send</button>
        </form>
    </div>

</div>

<div class="form-group row">

    <div id="edit" style="text-align: center;">

        <h5 style="font-weight: bold;">Delete Account</h5>
        <form method="post" action="{{route('mypage.delete')}}">
        {{ csrf_field() }}
        <button class="btn btn-danger" type="submit" onclick="return confirm('Deleting: Are you sure?')">Delete</button>
        </form>

        <!-- <h5 style="font-weight: bold;">Delete Account</h5>
        <a href="{{ route('mypage.delete') }}" onclick="return confirm('Deleting: Are you sure?')"
        class="btn btn-danger">Delete</a> -->

    </div>

</div>

</div>
</div>
</center>

<br>

@endsection