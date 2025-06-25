@extends('layout.app')
@section('content')

<section class="Management">
    <div class="Management__Container Container">
        <div class="Management__Main-flexs Main-flexs">
            <div class="Management__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="Management__MainBlock MainBlock">
                <h1 class="Management__h1 Educational-h1">Сведения об образовательной организации</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection