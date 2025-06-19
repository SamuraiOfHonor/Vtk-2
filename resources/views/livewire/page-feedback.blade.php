@extends('layout.app')
@section('content')

<section class="feedback">
    <div class="feedback__Container Container">
        <h2 class="feedback__Main-Title">Обратная связь</h2>
        <div class="feedback__Main-flex">
                <livewire:links.links-list />
                
                <form action="{{ route('feedback.feeds.store') }}" method="POST" class="feedback__feed-ul">
                    @csrf
                    <div class="feedback__feed-li">
                        <h2 for="name" class="feedback__h2">Имя:</h2>
                        <input id="name" wire:model="name" name="name" type="text" required class="feedback__name">
                    </div>
                    <div class="feedback__feed-li">
                        <h2 for="number" class="feedback__h2">Ваш Номер телефона:</h2>
                        <input id="number" wire:model="number" name="number" type="number" required class="feedback__number">
                    </div>
                    <div class="feedback__feed-li">
                        <h2 for="email" class="feedback__h2">Ваш e-mail:</h2>
                        <input id="email" wire:model="email" name="email" type="email" required class="feedback__email">
                    </div>
                    <div class="feedback__feed-li">
                        <h2 for="message" class="feedback__h2">Опишите проблему:</h2>
                        <textarea id="message" wire:model="message" name="message" type="text" required placeholder="Опишите проблему..." class="feedback__descriptions"></textarea>
                    </div>
                    <div class="feedback__feed-li">
                        <button type="sumbit" class="feedback__send-button">Отправить</button>
                    </div>
                </form>
        </div>
    </div>
</section>
  
@endsection