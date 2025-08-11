@extends('layouts.main')

@section('title', 'Hubungi Kami - Baherindo Motor')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-16">

  <!-- Judul -->
  <section class="text-center mb-16">
    <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-4">
      Hubungi Kami
    </h1>
    <p class="text-lg text-gray-600 mx-auto">
      Anda bisa menghubungi kami langsung melalui kontak berikut, atau kirimkan pesan Anda melalui formulir di bawah ini.
    </p>
  </section>

  <!-- Info Kontak -->
  <section class="grid grid-cols-1 sm:grid-cols-3 gap-8 mb-16">
    @php
      $contacts = [
        ['icon' => 'fa-phone-volume', 'title' => 'Telepon', 'info' => '0877-7778-8777'],
        ['icon' => 'fa-envelope-open-text', 'title' => 'Email', 'info' => 'baherindomotor@gmail.com'],
        ['icon' => 'fa-location-dot', 'title' => 'Alamat', 'info' => 'Jl. Air Mancur, Kota Bogor'],
      ];
    @endphp

    @foreach ($contacts as $contact)
    <div class="bg-white rounded-3xl shadow-md p-8 text-center border border-gray-200 flex flex-col items-center">
      <div class="text-indigo-600 text-5xl mb-5">
        <i class="fa-solid {{ $contact['icon'] }}"></i>
      </div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $contact['title'] }}</h3>
      <p class="text-gray-600 text-base">{{ $contact['info'] }}</p>
    </div>
    @endforeach
  </section>

  <!-- Form Kontak + Google Maps -->
  <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
    
    <!-- Form Kontak -->
    <div class="bg-white rounded-3xl shadow-md p-8 border border-gray-200 space-y-6">
      <h2 class="text-2xl font-semibold text-gray-900 mb-6">Kirim Pesan</h2>

      <form onsubmit="return false;" class="space-y-5">
        <div>
          <label for="name" class="block text-gray-800 font-medium mb-2">Nama</label>
          <input
            type="text" id="name"
            class="w-full px-4 py-3 border rounded-xl focus:ring-indigo-400 focus:outline-none focus:border-indigo-500 transition"
            placeholder="Masukkan nama Anda"
          >
        </div>
        <div>
          <label for="email" class="block text-gray-800 font-medium mb-2">Email</label>
          <input
            type="email" id="email"
            class="w-full px-4 py-3 border rounded-xl focus:ring-indigo-400 focus:outline-none focus:border-indigo-500 transition"
            placeholder="Email aktif Anda"
          >
        </div>
        <div>
          <label for="message" class="block text-gray-800 font-medium mb-2">Pesan</label>
          <textarea
            id="message" rows="5"
            class="w-full px-4 py-3 border rounded-xl focus:ring-indigo-400 focus:outline-none focus:border-indigo-500 transition"
            placeholder="Tulis pesan Anda..."
          ></textarea>
        </div>
        <button
          type="submit"
          class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-xl shadow-md transition focus:outline-none focus:ring-4 focus:ring-indigo-300"
        >
          Kirim Pesan
        </button>
      </form>

      <p class="text-sm text-gray-400 mt-3">*Form ini bersifat visual dan belum terhubung ke sistem pengiriman.</p>
    </div>

    <!-- Google Maps Embed -->
    <div class="rounded-3xl overflow-hidden shadow-md border border-gray-200">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.693782092202!2d106.7964095741344!3d-6.582005064451156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c1c3c1c9c1%3A0x3e4d6f4c634f2b63!2sJl.%20Air%20Mancur%2C%20Kota%20Bogor!5e0!3m2!1sen!2sid!4v1691765374982!5m2!1sen!2sid"
        width="100%"
        height="100%"
        style="min-height: 400px; border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
  </section>
</div>
@endsection
