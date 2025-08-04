@extends('layouts.main')

@section('title', 'Admin Form - Baherindo Motor')

@section('content')
<div class="container max-w-xl mx-auto p-6">
    <h1 class="text-3xl text-center font-semibold mb-2">Admin Form</h1>
    <p class="text-center mb-6 text-gray-600">Manage your motor listings here.</p>

    <form action="{{ route('motor.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="nama_motor" class="block text-gray-700 font-medium mb-1">Nama Motor</label>
            <input type="text" name="nama_motor" id="nama_motor" required class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="harga_motor" class="block text-gray-700 font-medium mb-1">Harga Motor</label>
            <input type="number" name="harga_motor" id="harga_motor" required class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="tahun_motor" class="block text-gray-700 font-medium mb-1">Tahun</label>
            <input type="number" name="tahun_motor" id="tahun_motor" required class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="km_motor" class="block text-gray-700 font-medium mb-1">Kilometers</label>
            <input type="number" name="km_motor" id="km_motor" required class="w-full p-2 border rounded">
        </div>

        <div class="mb-6">
            <label for="gambar_motor" class="block text-gray-700 font-medium mb-1">Gambar Motor</label>
            <input type="file" name="gambar_motor" id="gambar_motor" accept="laragon/www/baherindo_motor/public/asset" class="w-full p-2 border rounded">
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection
