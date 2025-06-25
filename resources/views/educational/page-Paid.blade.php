@extends('layout.app')
@section('content')

<section class="Paid">
    <div class="Paid__Container Container">
        <div class="Paid__Main-flexs Main-flexs">
            <div class="Paid__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="Paid__MainBlock MainBlock">
                <h1 class="Paid__h1 Educational-h1">Сведения об образовательной организации</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection