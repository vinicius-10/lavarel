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
                    <li><a href="myrron">Myrron Run</a></li>
                    <li><a href="demon">Demon Red</a></li>
                    <li><a href="shadow">Shadow</a></li>
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
                É {{ $isDayOrNight }}
                @if ( $isDayOrNight  == 'nigth')
                tenha cuidado
                @endif
            </div>
            
        </div>

        <div class="right-side">
        </div>
    </div>
    
@endsection
