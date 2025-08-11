<div data-theme="caramellatte">
    @forelse ($heros as $hero)
    <div class="hero min-h-full py-30 text-white" style="background-image: url('{{ \Storage::url($hero->hero_cerita) }}');">
        <div class="hero-overlay bg-black bg-opacity-30"></div>
        <div class="hero-content text-center -mt-10 mb-10">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Kisah Dibalik Setiap Adonan</h1>
                <p class="mb-5 text-2xl font-bold">
                    Provident cupiditate voluptatem et in.
                </p>
            </div>
        </div>
    </div>
    @empty
        <p>'data tidak ditemukan'</p>
    @endforelse

    @foreach ($storys as $story)
    <div class="hero min-h-1/2 mt-3 md:-mt-40 pb-8">
        <div class="hero-content">
            <div class="w-full max-w-4xl mx-auto p-4">
                <div class="card grid grid-cols-1 md:grid-cols-2 bg-white border rounded-lg shadow-lg overflow-hidden">

                    <div>
                        <img src="{{ \Storage::url($story->image) }}" class="w-full h-64 md:h-full object-cover"
                            alt="Kisah di balik adonan">
                    </div>

                    <div class="p-6 md:p-8 flex flex-col">
                        <h3 class="font-bold text-gray-800 mb-4 text-center text-3xl font-script">{{ $story->title }}</h3>
                        <p class="text-gray-600 text-left indent-8">
                            {!! $story->content !!}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
