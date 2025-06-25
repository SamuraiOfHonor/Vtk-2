<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Образовательное учреждение, образование" >
        <meta name="description" content="Образовательное учреждение" >
        <link rel="icon"  href="/storage/Header/images/logo.png">
        <title>Волгоградский Технический Колледж</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

    </head>
    <body class="bg-gray-100 text-gray-900">
        @include('partials.header')
        <main id="main" class="main">
            @yield('content')
        </main>
        @include('partials.footer')
        {{-- Подключение скриптов livewire --}}

        
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const burger = document.querySelector('.Header__burger');
                const menu = document.querySelector('.Header__Right-block');

                burger.addEventListener('click', function() {
                    this.classList.toggle('active');
                    menu.classList.toggle('active');

                    if (menu.classList.contains('active')) {
                        document.body.style.overflow = 'hidden';
                    } else {
                        document.body.style.overflow = '';
                    }
                });

                // Закрытие меню при клике на ссылку
                const menuLinks = document.querySelectorAll('.Header__links');
                menuLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        if (window.innerWidth <= 1024) {
                            burger.classList.remove('active');
                            menu.classList.remove('active');
                            document.body.style.overflow = '';
                        }
                    });
                });
            });
        </script>
    </body>
</html>
