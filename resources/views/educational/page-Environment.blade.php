@extends('layout.app')
@section('content')

<section class="Environment">
    <div class="Environment__Container Container">
        <div class="Environment__Main-flexs Main-flexs">
            <div class="Environment__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="Environment__MainBlock MainBlock">
                <h1 class="Environment__h1 Educational-h1">Сведения об образовательной организации</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection