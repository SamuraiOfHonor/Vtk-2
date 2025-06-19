@extends('layout.app')
@section('content')

<section class="Directions">
    <div class="Directions__Container Container">
        <div class="Directions__Main-flex">
            <h1 class="Directions__Main-Title">Направления</h1>

            <livewire:directions.directions2-list /> 
        </div>
    </div>
</section>
  
@endsection