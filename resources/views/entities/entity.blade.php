@extends('layouts.main')

@section('title','Sedatines')

@section('contend')
@if(session('success'))
            <p class="msg alert alert-success" role="alert">{{ session('success') }}</p>
        @endif
@foreach ($entities as $entity)
    <div class="left-side">
        
    </div>

    <div class="main">
        <h1>{{ $entity->name }}</h1>

    </div>

    <div class="right-side">
        
    </div>
@endforeach
    
@endsection
