@extends('layout.app')
@section('content')

<section class="Scholarships">
    <div class="Scholarships__Container Container">
        <div class="Scholarships__Main-flexs Main-flexs">
            <div class="Scholarships__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="Scholarships__MainBlock MainBlock">
                <h1 class="Scholarships__h1 Educational-h1">Сведения об образовательной организации</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection