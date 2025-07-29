@extends('layouts.main')
@section('title', 'Baherindo Motor')
@section('content')

<div>
    <h1>Hubungi Kami</h1>
    <h3>Untuk pertanyaan atau informasi lebih lanjut, silakan hubungi kami.</h3>
</div>

<div class="contact-info justify-center">
    <li><i class="fa-solid fa-phone"></i> <a>0877-7778-8777</a></li>
    <li><i class="fa-solid fa-envelope"></i> <a>baherindomotor@gmail.com</a></li>
    <li><i class="fa-solid fa-location-dot"></i> <a>Jl. Air Mancur, Kota Bogor</a></li>
</div>
   @endsection
<style>
    h1 {
        text-align: center;
        margin-top: 20px;
        font-weight: 700;
        font-size: 24px;
    }

    h3 {
        text-align: center;
        margin-bottom: 30px;
    }

    li {
        list-style: none;
        text-align: center;
        font-size: 13px;
    }
</style>


