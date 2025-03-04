@extends('layouts.app')
@section('content')
    <h1>Welcome to the CRUD App</h1>
    <a href="{{ url('/customers') }}" class="btn" style="background-color: #4643d3; color: white;">Go to Customer
        Index</a>
@endsection
