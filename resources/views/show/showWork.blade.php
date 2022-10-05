@extends('layouts.layout')

@section('css')
    <link href="{{ asset('css/myWork.css') }}" rel="stylesheet">
@endsection

@section('links')
<div class="links">
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('contact') }}">Contact</a> 
</div>
@endsection

@section('content')

@foreach($myWork as $myWorks)
<div class="myWork"> 
    <p class="myWorkHeader"> {{$myWorks["name"]}}.</p> 
    <p class="myWorkIntro"> Tick-It is een ticketsysteem gemaakt voor de docenten en studenten van het Da Vinci College</p>
    <img src="../images/{{$myWorks["image"]}}" class="myWorkPicture">
</div>
@endforeach

@endsection