@props(['data'])
<li class="employee__li">
        <a href="{{ route('page.single-worker', parameters: $data->id) }}" class="employee__block link__employee">
            <img src="{{ url('storage', $data->img) }}" alt="" class="employee__img">
           
            <div class="employee__info">
                <h2 class="employee__Name">{{ $data->name }}</h2>
                <div class="employee__post">
                    <h3 class="employee__post-h3">Должность:</h3>
                    <p class="employee__post-p">{{ $data->position->name }}</p>
                </div>
           
            </div>
        </a>
</li>