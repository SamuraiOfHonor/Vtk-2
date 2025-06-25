@extends('layout.app')
@section('content')

<section class="Reception">
    <div class="Reception__Container Container">
        <div class="Reception__Main-flexs Main-flexs">
            <div class="Reception__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="Reception__MainBlock MainBlock">
                <h1 class="Reception__h1 Educational-h1">Сведения об образовательной организации</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection