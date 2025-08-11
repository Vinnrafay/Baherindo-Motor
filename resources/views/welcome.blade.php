@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-12 mt-5 mb-28">
  <header class="text-center mb-14 max-w-4xl mx-auto">
    <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-tight">
      Baherindo Motor
    </h1>
    <p class="text-gray-600 text-base sm:text-lg mt-4 mx-auto leading-relaxed">
      Jual beli motor berkualitas dengan harga terjangkau di Bekasi.
    </p>
  </header>

  <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
    @foreach ($motor as $item)
    <article
      class="bg-white border border-gray-200 rounded-3xl shadow-md hover:shadow-xl transition-transform duration-300 hover:-translate-y-1 flex flex-col"
    >
      <a href="{{ route('motor.show', $item->id) }}" class="block overflow-hidden rounded-t-3xl">
        <img
          src="{{ asset('storage/' . $item->gambar_motor) }}"
          alt="{{ $item->nama_motor }}"
          class="w-full h-64 sm:h-72 object-cover object-center transition-transform duration-500 hover:scale-105"
        />
      </a>

      <div class="flex flex-col p-6 flex-grow">
        <h2 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-2 truncate" title="{{ $item->nama_motor }}">
          {{ $item->nama_motor }}
        </h2>

        {{-- Harga with badge --}}
        <div class="mb-4">
          <span class="inline-block bg-indigo-100 text-indigo-800 font-bold px-3 py-1 rounded-full text-sm shadow-inner">
            Rp {{ number_format($item->harga_motor, 0, ',', '.') }}
          </span>
        </div>

        {{-- Detail specs with neat icons --}}
        <div class="flex flex-wrap gap-5 mb-6 text-gray-700 text-sm sm:text-base">
          <div class="flex items-center gap-2 whitespace-nowrap">
            <i class="fa-solid fa-calendar text-indigo-600"></i>
            <span class="font-semibold"><strong></strong> {{ $item->tahun_motor }}</span>
          </div>
          <div class="flex items-center gap-2 whitespace-nowrap">
            <i class="fa-solid fa-road text-indigo-600"></i>
            <span class="font-semibold"><strong></strong> {{ number_format($item->km_motor, 0, ',', '.') }} KM</span>
          </div>
          @if(!empty($item->fitur))
          <div class="flex items-center gap-2 whitespace-nowrap">
            <i class="fa-solid fa-gem text-indigo-600"></i>
            <span>{{ $item->fitur }}</span>
          </div>
          @endif
        </div>

        {{-- Optional short description --}}
        @if(!empty($item->deskripsi))
        <p class="text-gray-600 text-sm mb-6 line-clamp-3 leading-relaxed">
          {{ $item->deskripsi }}
        </p>
        @endif

        {{-- Detail button --}}
        <a href="{{ route('motor.show', $item->id) }}"
          class="mt-auto inline-block w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-2xl shadow-md text-center transition focus:outline-none focus:ring-4 focus:ring-indigo-300"
        >
          Cek Detail
        </a>
      </div>
    </article>
    @endforeach
  </section>
</div>
@endsection
