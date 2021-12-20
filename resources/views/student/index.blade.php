@extends('layouts.frontend.app')

@section('title')
    {{$title}}
@endsection
<!-- add meta tag seciton  -->
@section('meta')

@endsection
<!-- push css  -->
@push('css')

@endpush
<!-- write content  -->
@section('content')

    <h1>
        hi Student and your name is {{ Auth::user()->name }}
    </h1>
    
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <a href="{{route('home')}}">Home</a>
@endsection
<!-- push javascript  -->
@push('js')

@endpush