@extends('layout.app')
@section('title', $direction->name)
@section('description', $direction->code)
@section('keywords', $direction->code)
@section('content')


<section class="Direction">
    <div class="Direction__Container Container">
        <div class="Direction__Main-flex">
            <div class="Direction__second">
                <div class="Direction__first">
                    <img src="{{ url('storage', $direction['img']) }}" alt="" class="Direction__img">
                    <h1 class="Direction__Main-Title">{{ $direction->code }}<br />{{ $direction->name }}</h1>
                </div>
                <div class="Direction__first">
                    <h2 class="Direction__h2">Основные Сведения</h2>
                    <ul class="Direction__ul-1">
                        <li class="Direction__li-1">
                            <h3 class="Direction__h3">Вид образовательной программы</h3>
                            <p class="Direction__p-1">{{ $direction->type }}</p>
                        </li>
                        <li class="Direction__li-1">
                            <h3 class="Direction__h3">Реализуемый уровень образования</h3>
                            <p class="Direction__p-1">{{ $direction->level }}</p>
                        </li>
                        <li class="Direction__li-1">
                            <h3 class="Direction__h3">Квалификация</h3>
                            <p class="Direction__p-1">{{ $direction->Qualification }}</p>
                        </li>
                        <li class="Direction__li-1">
                            <h3 class="Direction__h3">Информация о языках, на которых осуществляется образование (обучение)</h3>
                            <p class="Direction__p-1">{{ $direction->language->name }}</p>
                        </li>
                        <li class="Direction__li-1">
                            <h3 class="Direction__h3">Срок действия государственной аккредитации </h3>
                            <p class="Direction__p-1">{{ $direction->accreditation }}</p>
                        </li>
                        <li class="Direction__li-1">
                            <h3 class="Direction__h3">Кафедра программы</h3>
                            <p class="Direction__p-1">{{ $direction->Department }}</p>
                        </li>
                      
                    </ul>
                </div>
            </div>
            <div class="Direction__second">
                <ul class="Direction__ul-2"> 
                    <li class="Direction__li-3">
                        <ul class="Direction__ul-2">
                            <li class="Direction__li-2">
                                <p class="Direction__p-3">{{ $direction->description }}}</p>
                            </li>
                        </ul>  
                    </li>
                     
                    @foreach ($direction->getEducationWithFormNames() as $item)
                    <li class="Direction__li-3">
                        <ul class="Direction__ul-2">
                            <li class="Direction__li-2">
                                <h4 class="Direction__h4">Базовое образование</h4>
                                <p class="Direction__p-2">{{ $item['basic'] }}</p>
                            </li>
                            <li class="Direction__li-2">
                                <h5 class="Direction__h5">Форма обучения</h5>
                                <p class="Direction__p-2">{{ $item['form_name'] }} </p> 
                            </li>
                            <li class="Direction__li-2">
                                <h5 class="Direction__h5">Срок обучения</h5>
                                <p class="Direction__p-2">{{ $item['time']}}</p>
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