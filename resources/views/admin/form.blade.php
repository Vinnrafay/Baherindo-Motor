@extends('layouts.main')

@section('title', 'Admin Form - Baherindo Motor')

@section('content')
<div class="container max-w-xl mx-auto p-6">
    <h1 class="text-3xl text-center font-semibold mb-2">Admin Form</h1>
    <p class="text-center mb-6 text-gray-600">Manage your motor listings here.</p>

    <form>
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-1">Nama Motor</label>
            <input type="text" name="name" id="name" required class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-medium mb-1">Harga Motor</label>
            <input type="number" name="price" id="price" required class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="tahun" class="block text-gray-700 font-medium mb-1">Tahun</label>
            <input type="number" name="tahun" id="tahun" required class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="km" class="block text-gray-700 font-medium mb-1">Kilometers</label>
            <input type="number" name="km" id="km" required class="w-full p-2 border rounded">
        </div>

        <!-- Optional Submit Button -->
        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection
