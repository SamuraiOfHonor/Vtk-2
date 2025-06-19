<section class="Home">
    <div class="Home__container Container">
        <div class="Home__Main-flex">

            <h1 class="Home__Title">О нас</h1>
                    
            @forelse ( $Abouts as $about)
                    <x-about-card :data="$about" />
                @empty
                <h3 class="Home__description">Ой. не найдено!</h3>
            @endforelse     

        </div>
    </div>
</section>
