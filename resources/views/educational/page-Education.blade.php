@extends('layout.app')
@section('content')

<section class="Education">
    <div class="Education__Container Container">
        <div class="Education__Main-flexs Main-flexs">
            <div class="Education__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="Education__MainBlock MainBlock">
                <h1 class="Education__h1 Educational-h1">Сведения об образовательной организации</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection