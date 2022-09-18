@extends('layouts.layout')
@section('css')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('links')
<div class="links">
    <a href="#scrollToWork">Werk</a>
    <a href="#scrollToContact">Contact</a> 
</div>
@endsection

@section('content')

    <p class="intro">Ik ben <span>Berkan</span>. Ik <span> Design.</span> </p>

    <p class="description">Ik ben een enthousiaste student wanneer het komt op Web Development/Design. En streef altijd tot perfectionisme.</p>

    <div class="logoBackground">
        <div class="moveLogo">
            <img src="images/berkan_logowit.png" class="logo"  id="scrollToWork">
        </div>
    </div>
    <a href="{{ url('myWork') }}">
        <div class="workBackground show-on-scroll">
            <p class="tickit"> Tick-It </p> 
            <p class="myWork"> Mijn Werk </p> 
            <img src="images/schermopnametickit.png" class="tickitFoto">
        </div>
    </a>

    <div class="contactBackground show-on-scroll" id="scrollToContact">
        <p class="questions"> Vragen? </p> 
        <p class="mail"> Stuur me een mailtje! </p> 
        <i id="envelope" class="fa fa-envelope fa-8x"></i>
    </div>

    <div>
        <br>
        <br>
    </div>
    
@endsection
