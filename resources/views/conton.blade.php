<style>
    /* From Uiverse.io by vinodjangid07 - Modified */
    .Btn {
        position: relative;
        width: 200px;
        height: 55px;
        border-radius: 45px;
        border: none;
        /* Warna utama diubah ke cokelat kopi/emas gelap */
        background-color: #A67B5B;
        color: #F1E9E0;
        /* Warna teks agar kontras */
        /* Bayangan disesuaikan dengan tema warna baru */
        box-shadow: 0px 10px 10px #D8C2B3 inset,
            0px 5px 10px rgba(0, 0, 0, 0.3),
            0px -10px 10px #795536 inset;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        /* Menambahkan ketebalan font untuk keterbacaan */
    }

    .Btn::before {
        width: 70%;
        height: 2px;
        position: absolute;
        /* Efek kilau diubah menjadi lebih hangat */
        background-color: rgba(241, 233, 224, 0.6);
        content: "";
        filter: blur(1px);
        top: 7px;
        border-radius: 50%;
    }

    .Btn::after {
        width: 70%;
        height: 2px;
        position: absolute;
        background-color: rgba(241, 233, 224, 0.15);
        content: "";
        filter: blur(1px);
        bottom: 7px;
        border-radius: 50%;
    }

    .Btn:hover {
        animation: jello-horizontal 0.9s both;
    }

    @keyframes jello-horizontal {
        0% {
            transform: scale3d(1, 1, 1);
        }

        30% {
            transform: scale3d(1.25, 0.75, 1);
        }

        40% {
            transform: scale3d(0.75, 1.25, 1);
        }

        50% {
            transform: scale3d(1.15, 0.85, 1);
        }

        65% {
            transform: scale3d(0.95, 1.05, 1);
        }

        75% {
            transform: scale3d(1.05, 0.95, 1);
        }

        100% {
            transform: scale3d(1, 1, 1);
        }
    }
</style>
<div data-theme="caramellatte">
    <div class="w-full font-bold text-2xl p-10 text-primary text-center" data-theme="coffee">
        Lokasi Toko Kami
    </div>
    <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6 p-15">
        <div class="md:order-first">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.576949572409!2d106.8249641750172!3d-6.18747799379986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42e2a4a7f83%3A0x629524f2b9348e95!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1721739198089!5m2!1sen!2sid"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                class="w-full min-h-96 rounded-2xl shadow-2xl">
            </iframe>
        </div>
        <div class="card rounded-2xl shadow-2xl text-center order-first">
            <h5 class="text-2xl font-bold p-8" data-theme="coffee">
                Jam Operasional
            </h5>
            <div class="hero">
                <div class="hero-content flex-col md:flex-row">
                    <div class="">
                        <div class="card badge badge-accent text-1xl">
                            06.00 - 21.00
                        </div>
                    </div>
                    <div class="">
                        <div class="card badge badge-neutral text-1xl">
                            Dapur kami tutup 30 menit sebelum toko
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 text-center">

            </div> --}}
            <div class="hero-content">
                <button class="Btn">
                    Temukan Arah Di Peta
                </button>
            </div>
        </div>
    </div>
</div>
