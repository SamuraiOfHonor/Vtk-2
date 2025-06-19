@extends('layout.app')
@section('content')

    <section class="building">
        <div class="building__Container Container">
            <div class="building__Main-flex">
                <livewire:changes.changes-list /> 
                <livewire:houses.houses-list /> 
                <livewire:bodies.bodies-list />
            </div>
        </div>
    </section>
  
@endsection