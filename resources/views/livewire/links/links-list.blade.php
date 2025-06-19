<ul class="feedback__contacts-ul">
    
    @forelse ( $Links as $link)
                    <x-link-card :data="$link" />
    @empty
                <h3 class="Feedback__Null-Title Null-Title">Ссылки не найдены</h3>
     @endforelse  
</ul>
