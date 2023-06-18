@extends('admin/Layouts/main')

@section('content')
    <section class="h-screen flex flex-col px-20 py-12">
        <div>Pembayaran</div>
        <div class="flex flex-col gap-5">
            @foreach ($paket_tour as $item)
                <div class="flex gap-4 text-purple-800">
                    <div class="w-[600px] h-[85px] flex justify-between items-center px-4 rounded-md shadow-md">
                        <div class="flex flex-col gap-1">
                            <h5 class="text-xl font-semibold">{{ $item->nama }}</h5>
                            <p class="text-sm">{{ $item->durasi }}</p>
                        </div>
                        <div class="font-medium">{{ $item->harga }}</div>
                    </div>
                    <div class="h-[85px] w-[85px] rounded-md flex justify-center items-center shadow-md hover:bg-purple-600 hover:text-white cursor-pointer">
                        <a href="">
                            <i class="bi bi-pencil text-2xl"></i>
                        </a>
                    </div>
                    <div class="h-[85px] w-[85px] rounded-md flex justify-center items-center shadow-md hover:bg-purple-600 hover:text-white cursor-pointer">
                        <a href="">
                            <i class="bi bi-trash text-2xl"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
