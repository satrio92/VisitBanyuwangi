@extends('admin/Layouts/main')

@section('content')
    <section class="h-screen flex flex-col gap-20 pl-12 py-12">
        {{-- <div class="font-bold text-3xl">Welcome to VisitBanyuwangi, Andrea</div> --}}
        <div class="w-full flex gap-12">
            <a href="/admin/paket-tour">
                <div class="w-[300px] h-[150px] border-2 border-purple-600 font-bold cursor-pointer bg-white shadow-lg text-purple-800 hover:bg-purple-600 hover:text-white rounded-lg transition-all duration-300 ease-in-out flex justify-center items-center gap-4 text-2xl">
                    <i class="bi bi-box"></i>
                    <span>Paket Tour</span>
                </div>
            </a>
            <a href="/admin/rental-mobil">
                <div class="w-[300px] h-[150px] border-2 border-purple-600 font-bold cursor-pointer bg-white shadow-lg text-purple-800 hover:bg-purple-600 hover:text-white rounded-lg transition-all duration-300 ease-in-out flex justify-center items-center gap-4 text-2xl">
                    <i class="bi bi-box"></i>
                    <span>Rental Mobil</span>
                </div>
            </a>
            {{-- <a href="/admin/pembayaran">
                <div class="w-[300px] h-[150px] border-2 border-purple-600 font-bold cursor-pointer bg-white shadow-lg text-purple-800 hover:bg-purple-600 hover:text-white rounded-lg transition-all duration-300 ease-in-out flex justify-center items-center gap-4 text-2xl">
                    <i class="bi bi-box"></i>
                    <span>Pembayaran</span>
                </div>
            </a> --}}
        </div> 
    </section>
@endsection
