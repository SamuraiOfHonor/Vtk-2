@props(['data'])
<li class="Directions__li">
    <div class="Directions__links">
        <img src="{{ url('storage', $data->img) }}" alt="" class="Directions__img">
        <div class="Directions__card-Block">
            <div class="Directions__name-block">
                <h2 class="Directions__code-Number">{{ $data->code }}</h2>
                <h2 class="Directions__code-Name">
                    {{ $data->name }}
                </h2>
            </div>
            <a href="{{ route('page.single-direction', parameters: $data->id) }}" class="Directions__button">Подробнее</a>
        </div>
    </div>
</li>