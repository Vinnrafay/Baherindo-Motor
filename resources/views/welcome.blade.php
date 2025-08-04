@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
<div class="max-w-7xl mx-auto px-6 md:px-12 py-16">
    <div class="text-center mb-9">
        <h1 class="text-4xl font-extrabold text-gray-900">Baherindo Motor</h1>
        <p class="text-gray-500 text-lg mt-3">Jual beli motor berkualitas dengan harga terjangkau di Bekasi.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
        @foreach ($motor as $item)
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm transform transition duration-300 hover:shadow-lg hover:-translate-y-1 flex flex-col">
            <img src="{{ $item['gambar_motor'] }}" alt="{{ $item['nama_motor'] }}" class="h-52 w-full object-cover">

            <div class="flex flex-col p-6 flex-grow">
                <h2 class="text-xl font-semibold text-gray-800 mb-1">{{ $item['nama_motor'] }}</h2>
                <p class="text-gray-600 text-sm mb-1">Rp {{ number_format($item['harga_motor'], 0, ',', '.') }}</p>
                <p class="text-gray-900 text-sm mb-6">{{ $item['tahun_motor'] }}</p>
                <p class="text-gray-400 text-sm mb-6">{{ $item['km_motor'] }}</p>

                <div class="mt-4">
                    <button class="w-full bg-gray-900 hover:bg-gray-800 text-white text-sm py-2.5 rounded-md transition">
                        Beli Sekarang
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
