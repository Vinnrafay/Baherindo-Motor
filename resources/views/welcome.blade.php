@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
<div class="utama">
    <h1 class="text-3xl text-center font-semibold">Welcome to Baherindo Motor</h1>
    <h2 class="text-center">Jual beli motor termurah yang ada dibekasi.</h2>
  
<!-- Card -->
<div class="cardmotor grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 justify-center gap-6 px-4 md:px-10 py-6">
    @foreach ($motor as $item)
    <div class="w-80 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out flex flex-col">
        <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="{{ $item['img'] }}">
        <div class="card p-4 flex flex-col flex-grow">
            <h2 class="text-xl font-bold text-gray-800">{{ $item['name'] }}</h2>
            <h3 class="text-gray-600 font-semibold">
                Rp. {{ number_format($item['price'], 0, ',', '.') }} | {{ $item['tahun'] }}
            </h3>
            <h3 class="text-gray-600 font-medium">
            </h3>
            <h3 class="text-gray-600 text-bold">
                 {{ $item['km'] }}
            </h3>
            
            <div class="mt-auto flex justify-end">
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Beli
                </button>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection
<style>
    .cardmotor{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        margin: 10px;
    }

    h1 {
        margin-top: 15px;
        text-align: center;
        font-weight: 700;
    }

    /* p{
        text-align: center;
    } */

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;

    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }
    td {
        background-color: #f9f9f9;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    tr:hover {
        background-color: #ddd;
    }

    table, th, td {
        border: 1px solid black;
    }
</style>