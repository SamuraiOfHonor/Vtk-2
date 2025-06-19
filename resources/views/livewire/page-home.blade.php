@extends('layout.app')
@section('content')

  <livewire:abouts.abouts-list />
  
 <section class="home">
  <div class="home__container container">
    <div class="home__gallery gallery">
      <livewire:galleries.galleries-list>
    </div>
    <div class="home__directions Directions">
    <h1 class="Directions__Main-Title">Направления</h1>
      <livewire:directions.directions-list>
    </div>
  </div>
 </section>

@endsection