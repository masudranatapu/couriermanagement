@extends('layouts.frontend.app')

@section('title')
    {{$title}}
@stop

@push('css')

@endpush

@section('content')
    <h1>
       Hi User you name is  {{ Auth::user()->name }}
    </h1>
    
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    
    <a href="{{route('home')}}">Home</a>
@endsection

@push('js')

@endpush