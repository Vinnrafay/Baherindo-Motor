@extends('layouts.main')

@section('title', 'Admin Form - Baherindo Motor')

@section('content')
<div class="max-w-xl mx-auto px-8 py-12 bg-white rounded-2xl shadow-md border border-gray-200 mt-12 mb-16">
    <h1 class="text-3xl font-bold text-indigo-700 text-center">Admin Form</h1>
    <p class="text-center text-gray-600 mb-10">Manage your motor listings here.</p>

    <form action="{{ route('motor.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf

        <div>
            <label for="nama_motor" class="block text-sm font-semibold text-gray-700 mb-2">Nama Motor</label>
            <input type="text" name="nama_motor" id="nama_motor" required
                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                placeholder="Masukkan nama motor" />
        </div>

        <div>
            <label for="harga_motor" class="block text-sm font-semibold text-gray-700 mb-2">Harga Motor (Rp)</label>
            <input type="number" name="harga_motor" id="harga_motor" required
                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                placeholder="Masukkan harga motor" />
        </div>

        <div>
            <label for="tahun_motor" class="block text-sm font-semibold text-gray-700 mb-2">Tahun</label>
            <input type="number" name="tahun_motor" id="tahun_motor" required
                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                placeholder="Masukkan tahun" />
        </div>

        <div>
            <label for="km_motor" class="block text-sm font-semibold text-gray-700 mb-2">Kilometers</label>
            <input type="number" name="km_motor" id="km_motor" required
                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                placeholder="Masukkan kilometer" />
        </div>

        <div>
            <label for="gambar_motor" class="block text-sm font-semibold text-gray-700 mb-2">Gambar Motor</label>
            <input type="file" name="gambar_motor" id="gambar_motor"
                class="w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition" />
        </div>

        <div class="text-center pt-4">
            <button type="submit"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition transform hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-indigo-400">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection
