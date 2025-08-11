@extends('layouts.main')
@section('title', 'Tentang Kami - Baherindo Motor')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-16">

  <!-- Header Section -->
  <section class="text-center mb-16 max-w-3xl mx-auto">
    <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-4">
      Tentang Baherindo Motor
    </h1>
    <p class="text-lg text-gray-600">
      Baherindo Motor adalah dealer motor terpercaya yang berlokasi di Bekasi. Kami menyediakan berbagai pilihan motor berkualitas tinggi, layanan pelanggan profesional, dan harga yang kompetitif untuk memenuhi kebutuhan kendaraan Anda.
    </p>
  </section>

  <!-- Visi & Misi -->
  <section class="bg-gray-50 rounded-3xl p-10 mb-16 border border-gray-200 shadow-md max-w-5xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <div>
        <h2 class="text-2xl font-semibold text-gray-900 mb-4">Visi</h2>
        <p class="text-gray-700 leading-relaxed">
          Menjadi dealer motor terdepan di Bekasi dengan pelayanan terbaik, jaringan luas, dan reputasi yang terpercaya di mata pelanggan.
        </p>
      </div>
      <div>
        <h2 class="text-2xl font-semibold text-gray-900 mb-4">Misi</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-2 leading-relaxed">
          <li>Menyediakan pilihan motor berkualitas dan bergaransi.</li>
          <li>Memberikan layanan pelanggan yang ramah dan cepat tanggap.</li>
          <li>Menawarkan harga dan promo yang kompetitif setiap bulannya.</li>
          <li>Membangun hubungan jangka panjang dengan pelanggan kami.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Tim Kami -->
  <section class="max-w-5xl mx-auto">
    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-center ">
      Tim Kami
    </h2>
    <p class="text-center text-gray-600 mb-5">
      Kami memiliki tim profesional dengan pengalaman dan dedikasi tinggi di bidang otomotif.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 mt-3">
      <!-- Card 1 -->
      <div class="bg-white shadow-md rounded-3xl p-8 text-center border border-gray-200">
        <img src="https://i.pravatar.cc/150?img=11" alt="John Doe" class="w-24 h-24 mx-auto rounded-full mb-6">
        <h3 class="text-xl font-semibold text-gray-900 mb-1">John Doe</h3>
        <p class="text-gray-500">Manajer Penjualan</p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white shadow-md rounded-3xl p-8 text-center border border-gray-200">
        <img src="https://i.pravatar.cc/150?img=12" alt="Jane Smith" class="w-24 h-24 mx-auto rounded-full mb-6">
        <h3 class="text-xl font-semibold text-gray-900 mb-1">Jane Smith</h3>
        <p class="text-gray-500">Spesialis Produk</p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white shadow-md rounded-3xl p-8 text-center border border-gray-200">
        <img src="https://i.pravatar.cc/150?img=13" alt="Mike Johnson" class="w-24 h-24 mx-auto rounded-full mb-6">
        <h3 class="text-xl font-semibold text-gray-900 mb-1">Mike Johnson</h3>
        <p class="text-gray-500">Layanan Pelanggan</p>
      </div>
    </div>
  </section>

</div>
@endsection
