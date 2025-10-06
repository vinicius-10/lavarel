@extends('layouts.main')

@section('title','Sedatines')

@section('contend')

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
