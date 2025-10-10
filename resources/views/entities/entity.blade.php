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
        <h1>{{ $entity->ent_name }}</h1>
        @foreach ($entity->images as $image)
            <img src="{{ asset('storage/'.$image->img_path) }}" aria-label={{ $entity->ent_name }} width="150px">
        @endforeach
    </div>

    <div class="right-side">
        
    </div>
@endforeach
    
@endsection
