@extends('layout.app')
@section('content')

<section class="Standards">
    <div class="Standards__Container Container">
        <div class="Standards__Main-flexs Main-flexs">
            <div class="Standards__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="Standards__MainBlock MainBlock">
                <h1 class="Standards__h1 Educational-h1">Сведения об образовательной организации</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection