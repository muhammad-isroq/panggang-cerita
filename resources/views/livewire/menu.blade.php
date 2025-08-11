<div data-theme="caramellatte">
    @forelse ($heros as $hero)
    <div class="hero min-h-[50vh] py-20 text-white" style="background-image: url('{{ \Storage::url($hero->hero_menu) }}');">
        <div class="hero-overlay bg-black bg-opacity-30"></div> <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-4xl md:text-5xl font-bold">Daftar Cerita Menu Kami</h1>
                <p class="mb-5 font-bold">
                    Kami tidak hanya memanggang roti, kami merangkai kisah.
                </p>
            </div>
        </div>
    </div>
    @empty
    <p class="text-center p-10">Data hero tidak ditemukan</p>
    @endforelse

    <div class="container mx-auto px-4 py-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 md:-mt-32">
            
            <div class="md:col-span-1 md:order-last bg-neutral-50 p-6 shadow-lg rounded-lg h-fit">
                <div class="category-dropdown">
                    <label for="kategori" class="font-bold">Kategori Menu</label>
                    <select wire:model.live="selectedCategory" id="kategori" class="select select-bordered w-full mt-2">
                        <option value="">Semua Kategori</option>
                        @foreach($productCategory as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="md:col-span-3 md:order-first">
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                    @forelse ($products as $product)
                    <div class="card bg-base-100 shadow-xl text-center flex flex-col">
    <figure class="px-5 pt-5">
        <img src="{{ \Storage::url($product->thumbnail) }}" alt="{{ $product->slug }}"
            class="w-32 h-32 md:w-40 md:h-40 rounded-full object-cover transition-transform duration-300 ease-in-out hover:-translate-y-2">
    </figure>
    <div class="card-body flex flex-col items-center p-4 flex-grow">
        <h2 class="card-title text-lg font-bold">{{ $product->name }}</h2>
        <div class="text-sm opacity-75 mb-2">{!! $product->description !!}</div>
        <!-- spacer agar harga selalu di bawah isi tadi -->
        <div class="mt-auto">
            <p class="pb-2 font-semibold">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
        </div>
        <div class="card-actions">
            <a class="btn btn-secondary btn-sm md:btn-md text-neutral-50">
                Buy Now <i class="fa-solid fa-cart-shopping ml-2"></i>
            </a>
        </div>
    </div>
</div>
                    @empty
                    <p class="col-span-full text-center p-10">Produk tidak ditemukan.</p>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</div>