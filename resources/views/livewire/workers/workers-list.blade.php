<div class="employee__Main-flex">
<h1 class="employee__Main-title">Преподаватели</h1>
<ul class="employee__ul">
    @forelse ( $Workers as $worker)
        <x-worker-card :data="$worker" />
    @empty
        <h3 class="Gallery__Null-Title">Работники не найдены</h3>
    @endforelse 
    
</div>


