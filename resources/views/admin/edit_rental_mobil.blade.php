@extends('admin/Layouts/main')

@section('content')
    <section class="h-screen flex flex-col px-20 py-12">
        <form action="/admin/rental-mobil/edit/{{ $rental_mobil->id }}" method="post" class="flex flex-col items-center gap-6 py-16 w-[80l00/.k=0px] bg-white rounded-xl shadow-lg px-16" enctype="multipart/form-data">
        @csrf
            <div class="text-purple-800 text-2xl font-bold">Edit Rental Mobil</div>
            <div class="w-full flex gap-2 flex-col">
                <label for="nama" class="text-sm text-gray-600">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full border-2 border-purple-600 py-2 px-4 rounded-md text-gray-600 outline-none" placeholder="nama mobil" value="{{ $rental_mobil->nama }}">
            </div>
            <div class="w-full flex gap-2 flex-col">
                <label for="deskripsi" class="text-sm text-gray-600">Deskripsi</label>
                <textarea type="text" id="deskripsi" name="deskripsi" class="w-full border-2 border-purple-600 py-2 px-4 rounded-md text-gray-600 outline-none" placeholder="deskripsi...">{{ $rental_mobil->deskripsi }}</textarea>
            </div>
            <div class="w-full flex gap-2 flex-col">
                <label for="durasi" class="text-sm text-gray-600">Durasi</label>
                <div class="relative inline-block">
                    <select id="durasi" name="durasi" class="block appearance-none w-full py-2 px-4 pr-8 rounded-md leading-tight focus:outline-none focus:shadow-outline border-2 border-purple-600 text-gray-600" value="{{ $rental_mobil->durasi }}">
                        <option value="12 Jam">12 Jam</option>
                        <option value="1 Hari">1 hari</option>
                        <option value="2 Hari">2 Hari</option>
                        <option value="3 Hari">3 Hari</option>
                        <option value="4 Hari">4 Hari</option>
                        <option value="5 Hari">5 Hari</option>
                        <option value="6 Hari">6 Hari</option>
                        <option value="7 Hari">7 Hari</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                            <path fill-rule="evenodd" d="M19.293 6.293a1 1 0 00-1.414 0L10 14.586 2.121 6.707a1 1 0 10-1.414 1.414L10 17.414l8.293-8.293a1 1 0 000-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-full flex gap-2 flex-col">
                <label for="harga" class="text-sm text-gray-600">Harga</label>
                <input type="text" id="harga" name="harga" class="w-full border-2 border-purple-600 py-2 px-4 rounded-md text-gray-600 outline-none" placeholder="Rp 1.200.000" value="{{ $rental_mobil->harga }}">
            </div>
            <div class="w-full flex gap-2 flex-col">
                <label for="image" class="text-sm text-gray-600">Image</label>
                <div class="relative border-2 border-dashed border-purple-600 rounded-lg h-60">
                    <input type="file" id="image" name="image" class="absolute w-full h-full opacity-0">
                    <div id="image-preview" class="flex items-center justify-center h-full">
                        <img src="/storage/{{ $rental_mobil->image }}" alt="Preview" class="h-full">
                        {{-- <p class="text-gray-500">Drag and drop an image here<br>or click to select</p> --}}
                    </div>
                </div>
            </div>
            <div class="w-full flex gap-2 flex-col">
                <label for="konten" class="text-sm text-gray-600">Konten</label>
                <input id="konten" type="hidden" name="konten" value={{ $rental_mobil->konten }}>
                <trix-editor input="konten"></trix-editor>
            </div>
            <button class="w-full py-3 cursor-pointer rounded-md flex justify-center text-lg text-white font-semibold bg-purple-600" id="submit">Simpan Perubahan</button>
        </form>
        
    </section>

    <script>
        const imageInput = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');
    
        imagePreview.addEventListener('dragover', (e) => {
        e.preventDefault();
        imagePreview.classList.add('border-blue-500');
        });
    
        imagePreview.addEventListener('dragleave', () => {
        imagePreview.classList.remove('border-blue-500');
        });
    
        imagePreview.addEventListener('drop', (e) => {
        e.preventDefault();
        imagePreview.classList.remove('border-blue-500');
        
        const file = e.dataTransfer.files[0];
        handleImageFile(file);
        });
        imageInput.addEventListener('change', () => {
        const file = imageInput.files[0];
        handleImageFile(file);
        });
    
        function handleImageFile(file) {
        if (file) {
            const reader = new FileReader();
    
            reader.onload = (e) => {
            imagePreview.innerHTML = `<img src="${e.target.result}" alt="Preview" class="h-full">`;
            };
    
            reader.readAsDataURL(file);
        } else {
            imagePreview.innerHTML = '<p class="text-gray-500">Drag and drop an image here<br>or click to select</p>';
        }
        }
    </script>

@endsection