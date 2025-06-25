@extends('layout.app')
@section('content')

<section class="Food">
    <div class="Food__Container Container">
        <div class="Food__Main-flexs Main-flexs">
            <div class="Food__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="Food__MainBlock MainBlock">
                <h1 class="Food__h1 Educational-h1">Сведения об образовательной организации</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection