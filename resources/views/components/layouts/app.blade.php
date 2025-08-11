<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="coffee">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Panggang Cerita' }} - Panggang Cerita</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- Direktif ini WAJIB ada untuk Livewire --}}
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<style>
    a.active {
        @apply font-bold underline;
    }
</style>

<body class="w-full">

    <div class="sticky top-0 z-50 flex justify-between py-5 px-4 lg:px-14 shadow-sm" data-theme="coffee">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow ">
                    <li><a href="{{ route('/') }}" wire:navigate>`Beranda</a></li>
                    <li><a href="{{ route('cerita-kami') }}" wire:navigate>Cerita
                            Kami</a></li>
                    <li><a href="{{ route('menu') }}" wire:navigate>Menu</a></li>
                    <li><a href="{{ route('lokasi-kontak') }}" wire:navigate>Lokasi & Kontak</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">Panggang Cerita</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('/') }}"
                        class="@if (request()->is('/')) font-bold underline underline-offset-8 @endif hover:underline underline-offset-8"
                        wire:navigate>Beranda</a>
                </li>
                <li><a href="{{ route('cerita-kami') }}" wire:navigate
                        class="@if (request()->is('cerita-kami')) font-bold underline underline-offset-8 @endif hover:underline underline-offset-8">Cerita
                        Kami</a></li>
                <li><a href="{{ route('menu') }}" wire:navigate
                        class="@if (request()->is('menu')) font-bold underline underline-offset-8 @endif hover:underline underline-offset-8">Menu</a>
                </li>
                <li><a href="{{ route('lokasi-kontak') }}" wire:navigate
                        class="@if (request()->is('lokasi-kontak')) font-bold underline underline-offset-8 @endif hover:underline underline-offset-8">Lokasi
                        & Kontak</a>
                </li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="btn bg-primary text-neutral-900"><i class="fa-solid fa-phone p-2"></i> Pesan Sekarang</a>
        </div>
    </div>

    {{ $slot }}

    <footer class="footer
                sm:footer-horizontal bg-base-200 text-base-content p-15 md:p-20">
        <aside>
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd" clip-rule="evenodd" class="fill-current">
                <path
                    d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                </path>
            </svg>
            <p>
                Panggang Cerita.
                <br />
                Providing reliable tech since 2025
            </p>
        </aside>
        <nav>
            <h6 class="footer-title">Services</h6>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </nav>
        <nav>
            <h6 class="footer-title">Company</h6>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <h6 class="footer-title">Legal</h6>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
        </nav>
    </footer>

    <script>
        AOS.init();
    </script>
    {{-- Direktif ini WAJIB ada untuk Livewire --}}
    @livewireScripts
</body>

</html>
