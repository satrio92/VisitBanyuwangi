@extends('admin/Layouts/main')

@section('content')
    <section class="h-screen flex flex-col px-20 py-12">
        <div class=" flex justify-between items-center">
            <span class="text-purple-800 text-3xl font-semibold">Rental Mobil</span>
            <a href="/admin/rental-mobil/tambah">
                <div class="flex justify-center items-center gap-2 w-56 h-14 rounded-md border-2 text-purple-600 border-purple-600 font-semibold hover:text-white hover:bg-purple-600 transition-all duration-300 ease-in-out">
                    <i class="bi bi-plus-circle"></i>
                    <span>Tambah Rental Mobil</span>
                </div>
            </a>
        </div>
        <div class="flex flex-col gap-5">
            @foreach ($rental_mobil as $item)
                <div class="flex gap-4 text-purple-800">
                    <div class="w-[600px] h-[85px] flex justify-between items-center px-4 rounded-md shadow-md">
                        <div class="flex flex-col gap-1">
                            <h5 class="text-xl font-semibold">{{ $item->nama }}</h5>
                            <p class="text-sm">{{ $item->durasi }}</p>
                        </div>
                        <div class="font-medium">{{ $item->harga }}</div>
                    </div>
                    <a href="/admin/rental-mobil/edit/{{ $item->id }}">
                        <div class="h-[85px] w-[85px] rounded-md flex justify-center items-center shadow-md hover:bg-purple-600 hover:text-white cursor-pointer">
                            <i class="bi bi-pencil text-2xl"></i>
                        </div>
                    </a>
                    <a href="/admin/rental-mobil/remove/{{ $item->id }}">
                        <div class="h-[85px] w-[85px] rounded-md flex justify-center items-center shadow-md hover:bg-purple-600 hover:text-white cursor-pointer">
                            <i class="bi bi-trash text-2xl"></i>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection