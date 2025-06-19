@extends('layout.app')
@section('content')


<section class="Found">
    <div class="Found__Container Container">
        <h1 class="Found__h1">404</h1>
        <div class="Found__flex">
            <h1 class="Found__h2">Не найдено!</h1>
            <p class="Found__p">Возможно этой страницы не существовало, а может потерялась... <br> Давайте вернёмся на главную страницу.</p>
            <a href="/" class="Found__a">Вернуться</a>
        </div>
    </div>
</section>

@endsection