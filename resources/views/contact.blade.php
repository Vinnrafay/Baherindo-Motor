@extends('layouts.main')
@section('title', 'Hubungi Kami - Baherindo Motor')

@section('content')
<div class="container mx-auto max-w-6xl px-6 py-16">

    <!-- Judul -->
    <section class="text-center mb-14">
        <h1 class="text-5xl font-bold text-gray-800 mb-4">Hubungi Kami</h1>
        <p class="text-lg text-gray-600">
            Anda bisa menghubungi kami langsung melalui kontak berikut, atau kirimkan pesan Anda melalui formulir di bawah ini.
        </p>
    </section>

    <!-- Info Kontak -->
    <section class="grid grid-cols-1 sm:grid-cols-3 gap-8 mb-16">
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
            <div class="text-indigo-600 text-4xl mb-3">
                <i class="fa-solid fa-phone-volume"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-1">Telepon</h3>
            <p class="text-gray-600">0877-7778-8777</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
            <div class="text-indigo-600 text-4xl mb-3">
                <i class="fa-solid fa-envelope-open-text"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-1">Email</h3>
            <p class="text-gray-600">baherindomotor@gmail.com</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
            <div class="text-indigo-600 text-4xl mb-3">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-1">Alamat</h3>
            <p class="text-gray-600">Jl. Air Mancur, Kota Bogor</p>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
        <!-- Form Kontak -->
        <div class="bg-white rounded-lg shadow-lg p-8 space-y-6">
            <h2 class="text-2xl font-semibold text-gray-800">Kirim Pesan</h2>

            <form onsubmit="return false;">
                <div>
                    <label for="name" class="block text-gray-700 font-medium">Nama</label>
                    <input type="text" id="name" class="w-full mt-1 px-4 py-2 border rounded-md focus:ring-indigo-400 focus:outline-none" placeholder="Masukkan nama Anda">
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" id="email" class="w-full mt-1 px-4 py-2 border rounded-md focus:ring-indigo-400 focus:outline-none" placeholder="Email aktif Anda">
                </div>
                <div>
                    <label for="message" class="block text-gray-700 font-medium">Pesan</label>
                    <textarea id="message" rows="4" class="w-full mt-1 px-4 py-2 border rounded-md focus:ring-indigo-400 focus:outline-none" placeholder="Tulis pesan Anda..."></textarea>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white font-semibold px-6 py-2 rounded-md hover:bg-indigo-700 transition">
                    Kirim Pesan
                </button>
            </form>

            <p class="text-sm text-gray-400">*Form ini bersifat visual dan belum terhubung ke sistem pengiriman.</p>
        </div>

        <!-- Google Maps Embed -->
        <div class="rounded-lg overflow-hidden shadow-lg">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.693782092202!2d106.7964095741344!3d-6.582005064451156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c1c3c1c9c1%3A0x3e4d6f4c634f2b63!2sJl.%20Air%20Mancur%2C%20Kota%20Bogor!5e0!3m2!1sen!2sid!4v1691765374982!5m2!1sen!2sid" 
                width="100%" 
                height="100%" 
                style="min-height: 400px; border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </section>
</div>
@endsection
