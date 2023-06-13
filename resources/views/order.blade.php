@include('header2')
@section('title','Order')
<section class="bg-[#0078e7] flex flex-col ">

    <div class="flex justify-center flex-col">
        <div class="bg-[#0078e7] bg-gradient-to-tl from-[#aadbff] flex justify-center">
            <div class="flex flex-col-reverse md:flex-row p-10 md:py-10 lg:w-[1000px] xl:w-[1200px]">
                <div class="flex flex-col md:justify-center md:w-1/2 md:mr-8 lg:mr-16">
                    <h1 class="text-white text-4xl font-bold">Buat Pengalaman Customer yang Tidak Terlupakan dengan Landing Page</h1>
                    <p class="text-white text-1xl font-medium py-4" >
                        Website kami tidak dioptimalkan untuk semua
                        orang. Ketika Customer masuk kedalam
                        landing page. Anda akan mendapatkan lebih
                        banyak pelanggan.
                    </p>
                    <p class="text-white text-1xl font-medium py-4 pb-8">
                        Kami memiliki segala yang anda butuhkan
                        untuk meningkatkan penjualan produk anda.
                    </p>
                </div>
                <div class="drop-shadow-[3px_3px_5px_rgba(0,0,0,0.50)] flex justify-center items-center md:w-1/2">
                    <div class="aspect-[33/19] w-full bg-slate-600">
                        <!-- replace this with <img> tag -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center flex-col">

        <div class="bg-[#0078e7] bg-gradient-to-br from-[#aadbff] flex justify-center my-4">
            <div class="flex flex-col-reverse md:flex-row p-10 md:py-10 lg:w-[1000px] xl:w-[1200px]">
                <div class="drop-shadow-[3px_3px_5px_rgba(0,0,0,0.50)] flex justify-center items-center md:w-1/2">
                    <div class="aspect-[2/3] w-2/3 bg-slate-600">
                        <!-- replace this with <img> tag -->
                    </div>
                </div>
                <div class="flex flex-col md:justify-center md:w-1/2 md:ml-8 lg:ml-8">
                    <h1 class="text-white text-5xl font-bold">Isi Form Pemesanan</h1>
                    <form enctype="multipart/form-data" action="/order" method="POST" class="text-white text-2xl py-4 pb-8">
                        @csrf
                        <label for="name">Nama Anda:</label><br>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            required
                            placeholder="Nama Lengkap Anda Disini"
                            class="w-full bg-white text-black border border-gray-400 hover:border-gray-500 px-4 py-2 mb-3 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        >

                        <label for="email">Email Anda:</label><br>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            placeholder="EmailAndaDisini@email.com"
                            class="w-full bg-white text-black border border-gray-400 hover:border-gray-500 px-4 py-2 mb-3 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        >

                        <label for="phone">No. Handphone:</label><br>
                        <input
                            type="text"
                            id="phone"
                            name="phone"
                            required
                            placeholder="Nomor Handphone Anda"
                            class="w-full bg-white text-black border border-gray-400 hover:border-gray-500 px-4 py-2 mb-3 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        >

                        <label for="service">Layanan Kami:</label><br>
                        <select name="service" id="service" class="w-full bg-white text-black border border-gray-400 hover:border-gray-500 px-4 py-2 mb-3 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option value="0" disabled selected>Pilih Layanan Kami</option>
                            <option value="1">Layanan 1</option>
                            <option value="2">Layanan 2</option>
                            <option value="3">Layanan 3</option>
                        </select>

                        <label for="duration">Lama Pengerjaan Proyek:</label><br>
                        <select name="duration" id="duration" class="w-full bg-white text-black border border-gray-400 hover:border-gray-500 px-4 py-2 mb-3 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option value="0" disabled selected>Pilih Lama Pengerjaan Proyek Sampai</option>
                            <option value="1">Durasi 1</option>
                            <option value="2">Durasi 2</option>
                            <option value="3">Durasi 3</option>
                        </select>

                        <label for="price">Perkiraan Harga:</label><br>
                        <input type="number" id="price" name="price" required placeholder="Rp -,-" class="w-full bg-white text-black border border-gray-400 hover:border-gray-500 px-4 py-2 mb-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">

                        <button type="submit" class="bg-[#034380] hover:bg-[#3367b0] focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">PESAN SEKARANG</button>
                    </form>

                    @if(session()->has('message'))
                        <br>
                        <strong>{{session()->get('message')}}</strong>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center flex-col mt-16">
        <div class="flex justify-center">
            <h1 class="text-white text-5xl font-bold">JalanPage Menyediakan Layanan</h1>
        </div>
        <div class="bg-[#0078e7] bg-gradient-to-tl from-[#aadbff] flex justify-center my-4">
            <div class="p-10 flex flex-col justify-center items-center lg:w-[1000px] xl:w-[1200px]">
                <div class="flex flex-col md:flex-row">
                    <div class="flex items-center flex-col text-center py-4 sm:py-8 md:w-1/3 md:mr-8">
                        <div class="aspect-square w-[50px] md:w-[75px] bg-slate-600"></div>
                        <h1 class="text-white text-3xl font-semibold pt-2 pb-8" >24/7</h1>
                        <p class="text-white text-lg font-medium">Layanan 24 Jam Siap Membantu Anda Apabila Terjadi Kesulitan.</p>
                    </div>
                    <div class="flex items-center flex-col text-center py-4 sm:py-8 md:w-1/3 md:mx-8">
                        <div class="aspect-square w-[50px] md:w-[75px] bg-slate-600"></div>
                        <h1 class="text-white text-3xl font-semibold pt-2 pb-8" >Uang Kembali</h1>
                        <p class="text-white text-lg font-medium">Garansi Uang Kembali Dalam Kurung Waktu 30 Hari Apabila Customer Kurang Puas Dengan Layanan JalanPage.</p>
                    </div>
                    <div class="flex items-center flex-col text-center py-4 sm:py-8 md:w-1/3 md:ml-8">
                        <div class="aspect-square w-[50px] md:w-[75px] bg-slate-600"></div>
                        <h1 class="text-white text-3xl font-semibold pt-2 pb-8" >Keamanan Transaksi</h1>
                        <p class="text-white text-lg font-medium">Keamanan Transaksi Dijamin Aman, Dengan Banyak Pilihan Pembayaran.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@include('footer')
