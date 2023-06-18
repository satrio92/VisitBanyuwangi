@extends('main/Layouts/auth')

@if(isset($message))
    <script>
        alert('{{ $message }}')
    </script>      
@endif
@section('content')
    <section class="flex w-full h-screen">
        <div class="w-[calc(100%-540px)] flex items-center justify-center">
            <form action="/register" method="post" class="flex flex-col items-center gap-5 py-10 w-[500px] h-[600px] bg-white rounded-xl shadow-lg px-16">
            @csrf
                <div class="text-3xl font-bold text-purple-600">Register</div>
                <div class="w-full flex flex-col gap-2">
                    <label for="nama" class="text-sm text-gray-600">Nama Lengkap</label>
                    <input type="nama" id="nama" name="nama" class="w-full border-2 border-purple-600 py-2 px-4 rounded-md text-gray-600 outline-none" placeholder="John Doe">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="email" class="text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full border-2 border-purple-600 py-2 px-4 rounded-md text-gray-600 outline-none" placeholder="johndoe@mail.com">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="password" class="text-sm text-gray-600">Password</label>
                    <div class="flex justify-between w-full border-2 border-purple-600 py-2 px-4 rounded-md text-gray-600">
                        <input type="password" id="password" name="password" class="outline-none" placeholder="password123">
                        <i class="bi bi-eye text-purple-600"></i>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="repassword" class="text-sm text-gray-600">Re-Password</label>
                    <div class="flex justify-between w-full border-2 border-purple-600 py-2 px-4 rounded-md text-gray-600">
                        <input type="password" id="repassword" name="repassword" class="outline-none" placeholder="password123">
                        <i class="bi bi-eye text-purple-600"></i>
                    </div>
                </div>
                <button class="w-full h-11 flex justify-center items-center rounded-md bg-purple-600 text-white text-lg font-semibold">Register</button>
                <div class="text-sm text-gray-600 mt-4">already have an account ? <a href="/login" class="font-medium text-purple-600">login</a></div>
            </form>
        </div>
        <div class="">
            <img src="./images/safe-box.png" alt="safe box" class="h-full w-[540px] object-cover">
        </div>
    </section>
@endsection