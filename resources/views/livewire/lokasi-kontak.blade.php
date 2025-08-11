<div data-theme="caramellatte">
    @forelse ($heros as $hero)
    <div class="hero min-h-full py-25 text-white" style="background-image: url('{{ \Storage::url($hero->hero_lokasi) }}');">
        <div class="hero-overlay bg-black bg-opacity-30"></div>
        <div class="hero-content text-center -mt-10 mb-10">
            <div class="max-w-md">
                <h1 class="mb-5 text-4xl font-bold">Lokasi & Kontak Toko Kami</h1>
                <p class="mb-5 text-2xl font-bold">
                    kami tunggu kedatanganmu!
                </p>
            </div>
        </div>
    </div>
    @empty
    <p>data tidak ditemukan</p>
    @endforelse

    <div class="w-full" data-theme="caramellatte">
        <div class="md:w-3/4 justify-self-center pt-8">
            <h1 class="divider text-4xl md:text-3xl font-bold pt-8 pb-3 font-script">Hubungi Kami
            </h1>
        </div>
    </div>

    @foreach ($settings as $setting )

    <div class="hero min-h-full my-3">
        <div class="hero-content">
            <div class="grid grid-cols-1 md:max-w-6xl md:grid md:grid-cols-4 md:gap-4">
                <div
                    class="card bg-secondary text-neutral-content border-2 shadow-2xl rounded-none transition-transform duration-300 ease-in-out hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-14">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <h2 class="text-3xl font-bold font-script">Alamat Kami</h2>
                        <p>{{ $setting->alamat }}</p>
                    </div>
                </div>
                <div
                    class="card bg-primary text-neutral-content border-2 shadow-2xl rounded-none transition-transform duration-300 ease-in-out hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#ece7e4" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-phone-call-icon lucide-phone-call size-14">
                            <path d="M13 2a9 9 0 0 1 9 9" />
                            <path d="M13 6a5 5 0 0 1 5 5" />
                            <path
                                d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                        </svg>
                        <h2 class="text-3xl font-bold font-script">Nomor Telepon</h2>
                        <p>{{ $setting->no_hp }}</p>
                    </div>
                </div>
                <div
                    class="card bg-secondary text-neutral-content border-2 shadow-2xl rounded-none transition-transform duration-300 ease-in-out hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#ece7e4" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail size-14">
                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                            <rect x="2" y="4" width="20" height="16" rx="2" />
                        </svg>
                        <h2 class="text-3xl font-bold font-script">Email Kami</h2>
                        <p>{{ $setting->email }}</p>
                    </div>
                </div>
                <div
                    class="card bg-primary text-neutral-content border-2 shadow-2xl rounded-none transition-transform duration-300 ease-in-out hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#ece7e4" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-clock7-icon lucide-clock-7 size-14">
                            <path d="M12 6v6l-2 4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        <h2 class="text-3xl font-bold font-script">Jam Operasional</h2>
                        <p>Dapur kami tutup 30 menit sebelum tutup.</p>
                        <p>{{ $setting->opening_hours_weekday }} <br> {{ $setting->opening_hours_weekend }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full" data-theme="caramellatte">
        <div class="md:w-3/4 justify-self-center pt-8">
            <h1 class="divider text-2xl md:text-3xl font-bold pt-8 pb-3 font-script">Lokasi Kami
            </h1>
        </div>
    </div>

    <div class="w-full p-4 sm:p-6 md:p-8" data-theme="caramellatte">

        <div class="max-w-5xl mx-auto overflow-hidden rounded-xl shadow-lg">

            <div class="relative aspect-video">
                <iframe
                    src="{{ $setting->lokasi }}"
                    class="absolute top-0 left-0 w-full h-full border-0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>

    @endforeach
</div>
