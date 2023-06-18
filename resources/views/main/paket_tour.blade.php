@extends('main.Layouts.main')

@section('content')
    <section>
        <img src="./images/paket-tour-banner.jpg" alt="hero banner" class="w-full h-[715px] object-cover">
        <div class="w-full h-[715px] absolute top-0 left-0 flex items-center justify-center bg-gray-900/30 backdrop-blur-sm">
            <h2 class="text-6xl font-bold text-white">Paket Tour</h2>
        </div>
    </section>
    <section class="w-full py-20 flex flex-col gap-16 items-center">
        <div class="text-3xl font-bold">Pilihan Paket Tour</div>
        <div class="w-full flex justify-center gap-12 flex-wrap">
            @foreach ($paket_tour as $item)
                <a href="/paket-tour/{{ $item->id }}">
                    <div class="w-[280px] h-[350px] bg-gray-200 rounded-lg overflow-hidden shadow-md group">
                        <img src="/storage/{{ $item->image }}" alt="" class="h-[180px]">
                        <div class="bg-purple-600 text-white text-center font-semibold py-2 group-hover:bg-orange-500 transition-all duration-300 ease-in-out">{{ $item->nama }}</div>
                        <div class="text-[13px] text-gray-700 px-3 py-4 border-b-2 border-b-gray-300">{{ $item->deskripsi }}</div>
                        <div class="flex justify-between items-center px-3 py-3">
                            <div class="flex text-xs gap-1">
                                <i class="bi bi-clock"></i>
                                <span>{{ $item->durasi }}</span>
                            </div>
                            <div class="text-xs text-white font-medium py-2 px-3 rounded-sm bg-purple-600 group-hover:bg-orange-500 transition-all duration-300 ease-in-out">Booking Sekarang</div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection