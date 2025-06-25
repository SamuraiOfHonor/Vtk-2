@extends('layout.app')
@section('content')

<section class="Documents">
    <div class="Documents__Container Container">
        <div class="Documents__Main-flexs Main-flexs">
            <div class="Documents__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="Documents__MainBlock MainBlock">
                <h1 class="Documents__h1 Educational-h1">Документы</h1>



            </div>
        </div>
    </div>
</section>
  
@endsection