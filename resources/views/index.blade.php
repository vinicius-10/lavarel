@extends('layouts.main')

@section('title','Sedatines')

@section('contend')
    <div>
        <div class="left-side">
        </div>

        <div class="main">
            <div>
                <h1>Sedatines</h1> 
            </div>
            
        </div>

        <div class="right-side">
        </div>
    </div>

    <div>
        <div class="left-side">
        </div>

        <div class="main">
            <div>
                <ul>
                    <li><a href="entity">entidades</a></li>
                    <li><a href="entity/create">Criar</a></li>
                </ul>
            </div>
            
        </div>

        <div class="right-side">
        </div>
    </div>
    
    
    <div>
        <div class="left-side">
        </div>

        <div class="main">
            <div>
                @if ( $isDayOrNight  == 'nigth')
                tenha cuidado
                @endif
                <br>
                @foreach ($sedatines as $entity)
                    {{ $loop->index }} - {{ $entity }}<br>
                @endforeach
            </div>
            
        </div>

        <div class="right-side">
        </div>
    </div>
    
@endsection
