@extends('layout.app')
@section('content')

<section class="Activities">
    <div class="Activities__Container Container">
        <div class="Activities__Main-flexs Main-flexs">
            <div class="Activities__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="Activities__MainBlock MainBlock">
                <h1 class="Activities__h1 Educational-h1">Сведения об образовательной организации</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection