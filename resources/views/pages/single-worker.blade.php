@extends('layout.app')
@section('title', $worker->name)
@section('description', $worker->code)
@section('keywords', $worker->code)
@section('content')


<section class="Direction">
    <div class="Direction__Container Container">
        <div class="Direction__Main-flex">
            <div class="Direction__second">
                <div class="Direction__first">
                    <img src="{{ url('storage', $worker['img']) }}" alt="" class="Direction__img">
                    <h1 class="Direction__Main-Title"><span class="Direction__span">{{ $worker->position->name }}</span><br />{{ $worker->name }}</h1>
                </div>                                  
                <div class="Direction__first">
                    <h2 class="Direction__h2">Основные Сведения</h2>
                    <ul class="Direction__ul-1">
                        <li class="Direction__li-1">
                            <h3 class="Direction__h3">Общий стаж работы:</h3>
                            <p class="Direction__p-1">{{ $worker->exp }}</p>
                        </li>
                        <li class="Direction__li-1">
                            <h3 class="Direction__h3">Стаж(педагогический):</h3>
                            <p class="Direction__p-1">{{ $worker->exp_teacher }}</p>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="Direction__second">
                <h2 class="Direction__h2">Образование:</h2>
                <ul class="Direction__ul-2"> 
                    @foreach ($worker->getWorkers() as $item)
                    <li class="Direction__li-3">
                        <ul class="Direction__ul-2">
                            <li class="Direction__li-2">
                                <h4 class="Direction__h5">Специальность:</h4>
                                <p class="Direction__p-2">{{ $item['place-1'] }}</p>
                            </li>
                            <li class="Direction__li-2">
                                <h5 class="Direction__h5">Место учёбы:</h5>
                                <p class="Direction__p-2">{{ $item['specialization-1'] }}</p> 
                            </li>
                            <li class="Direction__li-2">
                                <h5 class="Direction__h5">Годы учёбы:</h5>
                                <p class="Direction__p-2">{{ $item['time-start-1'] }} - {{ $item['time-end-1'] }}</p>
                            </li>
                        </ul>  
                    </li>
                    @endforeach
                </ul>
                    
            </div>
        </div>
    </div>
</section>

@endsection