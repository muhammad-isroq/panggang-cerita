<div class="bg-base-200">
    @forelse ($heros as $hero)
        <div class="hero min-h-full pb-10">
            <div class="hero-content max-w-5xl flex-col lg:flex-row-reverse gap-8">

                <img src="{{ \Storage::url($hero->image) }}" class="max-w-sm md:max-w-full rounded-lg -mt-10 md-mt-15" />

                <div class="-mt-10 md:mt-0 text-center lg:text-left">
                    <h1 class="text-4xl font-bold font-script">{!! $hero->title1 !!}</h1>
                    <p class="mb-5">
                        {!! $hero->title2 !!}
                    </p>
                    <div class="py-5 flex justify-evenly">
                        <a class="btn bg-orange-800 text-amber-50 shadow-xl">Lihat Menu Terbaru</a>
                        <a class="btn btn-warning text-black shadow-xl">Baca Cerita Kami</a>        
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p>'data tidak ditemukan'</p>
@endforelse

<div class="w-full" data-theme="caramellatte">
    <div class="max-w-6xl mx-auto md:-mt-30 rounded py-4">
        <h3 class="divider text-2xl font-bold pt-15 pb-3">Favorit
            Pelanggan
        </h3>
        <h5 class="font-bold text-primary text-center pt-3">Cerita Yang Paling
            Disukai
        </h5>
    </div>
</div>

<div class="hero min-h-full" data-theme="caramellatte">
    <div class="hero-content max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($featureds as $featured)
            <div class="card rounded-xl shadow-2xl  border border-transparent hover:border-orange-500 transition-colors duration-300 cursor-pointer">
                <figure class="relative rounded-xl overflow-hidden">
                    <img src="{{ \Storage::url($featured->thumbnail) }} "
                        class="w-full shadow-2xl rounded-xl transition-transform duration-300 ease-in-out hover:-translate-y-2"
                        style="height: 200px; object-fit:cover;" alt="menu" />
                    <div
                        class="absolute bottom-0 left-0 right-0 p-4 text-center bg-gradient-to-t from-black/60 to-transparent">                        
                    </div>
                </figure>                
                <div class="card-body text-primary text-center">
                    <h2 class="text-secondary text-center text-xl font-semibold">{{ $featured->name }}</h2>
                    <p class="indent-8">{!! $featured->description !!}                    
                    </p>
                    <div class="text-center text-neutral font-bold">Rp. {{ $featured->price }}</div>
                </div>
                <div class="card-actions justify-center pb-3">                  
                  <a href="" class="btn btn-secondary text-neutral-50"><i class="fa-solid fa-phone"></i>Pesan Sekarang</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="hero min-h-full" data-theme="caramellatte">
    <div class="hero-content max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6">
            @foreach ($storys as $story)
            <div class="flex flex-col justify-between">
                <div>
                    <h2 class="divider divider-start text-3xl text-neutral font-bold font-script mb-4">Cerita Kami</h2>
                    <p class="leading-relaxed text-primary">
                        {!! Str::limit($story->content, 300) !!}
                    </p>
                </div>
                <a href="#" class="btn bg-orange-800 m-3 p-3 rounded-md shadow-md text-amber-50 float-left">
                    Selami Kisah Kami Lebih Dalam

                </a>
            </div>
            <div class="rounded-md overflow-hidden">
                <img src="{{ \Storage::url($story->image) }}" alt="Interior Toko Roti" class="w-full object-cover"
                    style="height: 300px">
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="w-full" data-theme="caramellatte">
    <div class="md:w-3/4 justify-self-center pt-8">
        <h3 class="divider text-2xl md:text-3xl font-bold pt-8 pb-3 font-script">Apa yang dikatakan pelanggan kami?
        </h3>
    </div>
</div>

<div class="hero min-h-full pt-4 pb-8" data-theme="caramellatte">
    <div class="hero-content">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($testimonials as $testimonial)
            <div class="card card-dash bg-secondary-content rounded-md shadow-md w-96">
                <div class="card-body">
                    <p>{!! $testimonial->quote !!}
                    </p>
                    <div class="card-actions justify-start">
                        <div class="avatar">
                            <div class="w-10 rounded-full">
                                <img src="{{ \Storage::url($testimonial->image) }}" />
                            </div>
                        </div>
                        <h5 class="pt-3">{{ $testimonial->name }}, {{ $testimonial->source }}</h5>
                    </div>
                </div>                
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="w-full" data-theme="caramellatte">
    <div class="md:w-3/4 justify-self-center pt-8">
        <h3 class="divider text-2xl font-bold pt-8 pb-3">Punya pertanyaan atau ingin pesan?
        </h3>
        <p class="text-primary font-bold text-center pt-3">
            pilih cara termudah untuk menghubungi kami
        </p>
    </div>
</div>

<div class="hero min-h-full" data-theme="caramellatte">
    <div class="hero-content">
        <div class="md:w-3/4 justify-self-center">
            <div class="chat chat-start mb-3 md:mb-4">
                <div class="chat-image avatar">
                    <div class="w-20 md:w-40 rounded-full">
                        <img alt="Tailwind CSS chat bubble component" src="{{ asset('assets/img/discount.png') }}" />
                    </div>
                </div>
                <div class="chat-bubble shadow-2xl" data-theme="coffee">
                    <h1 class="text-1xl text-neutral-50 font-bold">Pesan cepat via whatsapp</h1>
                    <p class="py-2">Cara terbaik untuk memesan roti harian, menanyakan ketersediaan produk
                        atau konsultasi
                        kue kustom. Tim kami akan merespon secepatnya.</p>
                    <div class="text-center">
                        <a href="" class="mt-2 btn bg-primary text-neutral-900 m-2 text-center"><i
                                class="fa-solid fa-phone p-2"></i> Chat di
                            whatsapp</a>
                    </div>
                </div>
            </div>
            <div class="chat chat-end mb-3 md:mb-4">
                <div class="chat-image avatar">
                    <div class="w-20 md:w-40 rounded-full">
                        <img alt="Tailwind CSS chat bubble component" src="{{ asset('assets/img/discount2.png') }}" />
                    </div>
                </div>
                <div class="chat-bubble chat-bubble-neutral shadow-2xl">
                    <h1 class="text-1xl font text-neutral-50 font-bold">
                        Hubungi toko
                    </h1>
                    <p class="py-2">Ingin bicara langsung dengan tim kami? Hubungi kami selama jam operasional
                        untuk
                        informasi yang mendesak</p>
                    <div class="text-center">
                        <a href="" class="mt-2 btn btn-secondary m-2"><i class="fa-solid fa-phone p-2"></i>
                            Telepon sekarang: (021) 123
                            4567</a>
                    </div>
                </div>
            </div>
            <div class="chat chat-start mb-3 md:mb-4">
                <div class="chat-image avatar">
                    <div class="w-20 md:w-40 rounded-full">
                        <img alt="Tailwind CSS chat bubble component" src="{{ asset('assets/img/discount.png') }}" />
                    </div>
                </div>
                <div class="chat-bubble shadow-2xl" data-theme="coffee">
                    <h1 class="text-1xl text-neutral-50 font-bold">Kirim email</h1>
                    <p class="py-2">Untuk keperluan kerja sama, penawaran bisnis, liputan media atau
                        pertanyaan lain yang
                        lebih detail, silahkan kirimkan email kepada kami.</p>
                    <div class="text-center">
                        <a href="" class="mt-2 btn bg-primary text-neutral-900 m-2 text-center"><i
                                class="fa-solid fa-envelope p-2"></i> Email
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</div>
