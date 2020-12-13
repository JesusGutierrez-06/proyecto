
@extends('layout')
@section('title','Home')
    
@section('contenido')
<div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>

@endsection
