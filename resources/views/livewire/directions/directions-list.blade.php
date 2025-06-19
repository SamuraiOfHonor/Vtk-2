<ul class="Directions__ul">
    @forelse ( $directions as $direction)
        <x-direction-card :data="$direction" />
    @empty
        <h3 class="Directions__Null-Title Null-Title">Направления не найдены</h3>
    @endforelse            
</ul>
