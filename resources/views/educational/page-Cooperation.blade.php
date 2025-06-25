@extends('layout.app')
@section('content')

<section class="Cooperation">
    <div class="Cooperation__Container Container">
        <div class="Cooperation__Main-flexs Main-flexs">
            <div class="Cooperation__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="Cooperation__MainBlock MainBlock">
                <h1 class="Cooperation__h1 Educational-h1">Сведения об образовательной организации</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection