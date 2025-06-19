<div class="change__new">
        <h1 class="change__new-title">Что было изменено</h1>
    <div class="change__new-block">
        <ul class="change__new-ul">
            @forelse ( $Changes as $change)
                    <x-change-card :data="$change" />
            @empty
                <h3 class="change__Null-Title Null-Title">Изменения не найдены</h3>
            @endforelse  
        </ul>
    </div>
</div>