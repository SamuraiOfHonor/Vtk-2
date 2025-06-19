<div class="building__old">
        <h1 class="building__old-title">Корпус до обновления</h1>
    <div class="building__old-block">
        <ul class="building__old-ul">
                       
            @forelse ( $Bodies as $body)
                    <x-body-card :data="$body" />
            @empty
                <h3 class="building__Null-Title Null-Title">Изображения не найдены</h3>
            @endforelse               
        </ul>
    </div>                    
</div>
