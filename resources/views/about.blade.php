@extends('layouts.main')
@section('title', 'Tentang Kami - Baherindo Motor')

@section('content')
<div class="container mx-auto max-w-5xl px-4 py-12">

    <!-- Header Section -->
    <section class="text-center mb-12">
        <h1 class="text-5xl font-extrabold text-gray-800 mb-4">Tentang Baherindo Motor</h1>
        <p class="text-lg text-gray-600 mx-auto">
            Baherindo Motor adalah dealer motor terpercaya yang berlokasi di Bekasi. Kami menyediakan berbagai pilihan motor berkualitas tinggi, layanan pelanggan profesional, dan harga yang kompetitif untuk memenuhi kebutuhan kendaraan Anda.
        </p>
    </section>

    <!-- Visi Misi -->
    <section class="bg-gray-100 rounded-lg p-6 mb-12 border-2 border-gray-200 shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Visi</h2>
                <p class="text-gray-600">
                    Menjadi dealer motor terdepan di Bekasi dengan pelayanan terbaik, jaringan luas, dan reputasi yang terpercaya di mata pelanggan.
                </p>
            </div>
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Misi</h2>
                <ul class="list-disc list-inside text-gray-600 space-y-1">
                    <li>Menyediakan pilihan motor berkualitas dan bergaransi.</li>
                    <li>Memberikan layanan pelanggan yang ramah dan cepat tanggap.</li>
                    <li>Menawarkan harga dan promo yang kompetitif setiap bulannya.</li>
                    <li>Membangun hubungan jangka panjang dengan pelanggan kami.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tim Kami -->
    <section>
        <h2 class="text-3xl font-bold text-gray-800 text-center">Tim Kami</h2>
        <p class="text-center text-gray-600 mb-5">
            Kami memiliki tim profesional dengan pengalaman dan dedikasi tinggi di bidang otomotif.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mb-5 mt-2">
            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center border-2 border-gray-200">
                <img src="https://i.pravatar.cc/150?img=11" alt="John Doe" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-gray-800">John Doe</h3>
                <p class="text-gray-500">Manajer Penjualan</p>
                <p class="mt-2 text-sm text-gray-600">Berpengalaman lebih dari 10 tahun dalam industri penjualan otomotif dan dikenal dengan pendekatan customer-first.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center border-2 border-gray-200">
                <img src="https://i.pravatar.cc/150?img=12" alt="Jane Smith" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Jane Smith</h3>
                <p class="text-gray-500">Spesialis Produk</p>
                <p class="mt-2 text-sm text-gray-600">Memiliki keahlian dalam spesifikasi motor dan teknologi terbaru, siap membantu memilih motor yang sesuai kebutuhan.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center border-2 border-gray-200">
                <img src="https://i.pravatar.cc/150?img=13" alt="Mike Johnson" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Mike Johnson</h3>
                <p class="text-gray-500">Layanan Pelanggan</p>
                <p class="mt-2 text-sm text-gray-600">Selalu siap menjawab pertanyaan pelanggan dengan cepat dan ramah, memastikan kepuasan Anda terjaga.</p>
            </div>
        </div>
    </section>

</div>
@endsection
