@extends('layout.app')
@section('content')

<section class="SupportProcess">
    <div class="SupportProcess__Container Container">
        <div class="SupportProcess__Main-flexs Main-flexs">
            <div class="SupportProcess__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="SupportProcess__MainBlock MainBlock">
                <h1 class="SupportProcess__h1 Educational-h1">Сведения об образовательной организации</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection