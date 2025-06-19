<div class="Gallery__spec-block">
    
    <div class="Gallery__spec-seconds">
        <h2 class="Gallery__Main-Title">Галлерея</h2>
    </div>
        <ul class="Gallery__ul">
            @forelse ( $galleries as $gallery)
                <x-gallery-card :data="$gallery" />
            @empty
                <h3 class="Gallery__Null-Title Null-Title">Изображения не найдены</h3>
            @endforelse     
        </ul>
   
</div>