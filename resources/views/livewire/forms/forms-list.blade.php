
@forelse($Forms as $form)
    <x-form-card :data="$form" />
    @empty
    <p class="Direction__p-3">Нету</p>     
@endforelse
