@extends('main/Layouts/main')

@section('content')
    <section>
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
    </section>
@endsection