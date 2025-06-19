@props(['data'])
    <li class="Gallery__li">
        <button class="Gallery__button">
            <img src="{{ url('storage', $data->img) }}" alt="asd" class="Gallery__img">
        </button>
    </li>