@props(['data'])
<li class="feedback__contacts-li">
        <h2 class="feedback__contact-title">Номер телефона:</h2>
        <a href="tel:{{ $data->number }}" class="feedback__vtk">+{{ $data->number }}</a>
</li>
<li class="feedback__contacts-li">
        <h2 class="feedback__contact-title">E-mail:</h2>
        <a href="mailto:{{ $data->email }}" class="feedback__vtk">{{ $data->email }}</a>
</li>
<li class="feedback__contacts-li">
        <ul class="feedback__spec-ul">
                @foreach ($data->linking as $item)
                <li class="feedback__spec-li">
                        <a href="{{ $item['url'] }}" class="feedback__vtk"><img src="{{url('storage', $item['png']) }}" alt=""></a>
                </li>
                @endforeach
        </ul>
        
</li> 
                    