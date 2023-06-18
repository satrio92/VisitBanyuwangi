@extends('main/Layouts/main')

@section('content')
    <section>
        <div class="h-20"></div>
        {{-- <h1>Detail Paket Tour</h1> --}}
    </section>\
    <section class="flex gap-8 pt-12">
        <section class="px-20 w-[800px] flex flex-col gap-3">
            <img src="/storage/{{ $paket_tour->image }}" alt=""
                class="w-[600px] rounded-xl h-[280px] object-cover overflow-hidden">
            <h1 class="text-2xl font-bold"> {{ $paket_tour->nama }}</h1>
            <div class="w-[600px] flex justify-between">
                <h4 class="font-semibold">Rp {{ $paket_tour->harga }}</h4>
                <h4 class="font-semibold">Rp {{ $paket_tour->durasi }}</h4>
            </div>
            <div class="w-full">{!! $paket_tour->konten !!}</div>
        </section>
        <section class="w-[450px] h-[500px] bg-pink-200">
            <form action="/pembayaran" method="post"
                class="flex flex-col items-center gap-6 py-16 w-[80l00/.k=0px] bg-white rounded-xl shadow-lg px-16"
                enctype="multipart/form-data">
                @csrf
                <div class="text-purple-800 text-2xl font-bold">Booking Form</div>
                <div class="w-full flex gap-2 flex-col">
                    <label for="nama" class="text-sm text-gray-600">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="w-full border-2 border-purple-600 py-2 px-4 rounded-md text-gray-600 outline-none"
                        placeholder="nama lengkap">
                </div>
                <div class="w-full flex gap-2 flex-col">
                    <label for="email" class="text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full border-2 border-purple-600 py-2 px-4 rounded-md text-gray-600 outline-none"
                        placeholder="email...">
                </div>
                <div class="w-full flex gap-2 flex-col">
                    <label for="telepon" class="text-sm text-gray-600">Telepon</label>
                    <input type="text" id="telepon" name="telepon"
                        class="w-full border-2 border-purple-600 py-2 px-4 rounded-md text-gray-600 outline-none"
                        placeholder="nomor telepon...">
                </div>
                <div class="w-full flex gap-2 flex-col">
                    <label for="tanggal" class="text-sm text-gray-600">Tanggal Tour</label>
                    <input type="date" id="tanggal" name="tanggal"
                        class="w-full border-2 border-purple-600 py-2 px-4 rounded-md text-gray-600 outline-none">
                </div>
                <div class="w-full flex gap-2 flex-col">
                    <label for="image" class="text-sm text-gray-600">Bukti Pembayaran</label>
                    <div class="relative border-2 border-dashed border-purple-600 rounded-lg h-60">
                        <input type="file" id="image" name="image" class="absolute w-full h-full opacity-0">
                        <div id="image-preview" class="flex items-center justify-center h-full">
                            <p class="text-gray-500">Drag and drop an image here<br>or click to select</p>
                        </div>
                    </div>
                </div>
                <div class="w-full py-3 cursor-pointer rounded-md flex justify-center text-lg text-white font-semibold bg-purple-600"
                    id="submit">Booking Sekarang</button>
            </form>
        </section>
    </section>
    {{-- <section>
        <img src="./images/hero-banner.png" alt="hero banner" class="w-full h-[715px] object-cover">
    </section>
    <section class="w-full py-20 flex flex-col gap-16 items-center">
        <div class="text-3xl font-bold">Kenapa memilih VisitBanyuwangi ?</div>
        <div class="w-full flex justify-center gap-12">
            <div class="w-[280px] h-[320px] hover:bg-purple-600 hover:text-white px-3 flex flex-col justify-center items-center gap-3 rounded-lg group cursor-default transition-all duration-300 ease-in-out">
                <div class="w-14 h-14 rounded-full border-[3px] border-gray-900 group-hover:border-white flex items-center justify-center">
                    <i class="bi bi-magic text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold">Berpengalaman</h3>
                <p class="text-center">Kami memiliki tim yang profesional dan berpengalaman dibidangnya masing-masing, sehingga dapat memberikan pelayanan yang optimal.</p>
            </div>
            <div class="w-[280px] h-[320px] hover:bg-purple-600 hover:text-white px-3 flex flex-col justify-center items-center gap-3 rounded-lg group cursor-default transition-all duration-300 ease-in-out">
                <div class="w-14 h-14 rounded-full border-[3px] border-gray-900 group-hover:border-white flex items-center justify-center">
                    <i class="bi bi-briefcase-fill text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold">Kualitas Pelayanan</h3>
                <p class="text-center">Kerja keras dan memberikan pelayanan dengan hati merupakan dedikasi kami untuk memastikan liburan Anda berkesan dan menyenangkan.</p>
            </div>
            <div class="w-[280px] h-[320px] hover:bg-purple-600 hover:text-white px-3 flex flex-col justify-center items-center gap-3 rounded-lg group cursor-default transition-all duration-300 ease-in-out">
                <div class="w-14 h-14 rounded-full border-[3px] border-gray-900 group-hover:border-white flex items-center justify-center">
                    <i class="bi bi-tags-fill text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold">Harga Bersaing</h3>
                <p class="text-center">Dengan jaringan dan mitra yang kuat dibidang pariwisata, membuat kami dapat memberikan pelayanan dan harga terbaik untuk tour Anda.</p>
            </div>
            <div class="w-[280px] h-[320px] hover:bg-purple-600 hover:text-white px-3 flex flex-col justify-center items-center gap-3 rounded-lg group cursor-default transition-all duration-300 ease-in-out">
                <div class="w-14 h-14 rounded-full border-[3px] border-gray-900 group-hover:border-white flex items-center justify-center">
                    <i class="bi bi-cash text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold">Mudah dan Praktis</h3>
                <p class="text-center">Kami memberikan kemudahan dalam mempersiapkan akomodasi dan transportasi terbaik, agar rencana liburan Anda berjalanan dengan lancar.</p>
            </div>
        </div>
    </section> --}}
@endsection
