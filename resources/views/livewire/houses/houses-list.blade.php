<div class="building__new">
        <h1 class="building__new-title">Обновлённый Корпус</h1>
    <div class="building__new-block">
        <ul class="building__new-ul">
            @forelse ( $Houses as $house)
                    <x-house-card :data="$house" />
            @empty
                <h3 class="Gallery__Null-Title Null-Title">Изображения не найдены</h3>
            @endforelse  
           
        </ul>
    </div>
</div>