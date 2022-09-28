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
    
@endsection