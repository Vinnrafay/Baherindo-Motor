@extends('layouts.main')
@section('title', 'Baherindo Motor')
@section('content')

<div>
    <h1 class="font-bold text-3xl mb-2">Tentang Baherindo Motor</h1>
    <p>Baherindo Motor adalah dealer motor terpercaya di Bekasi, menyediakan berbagai jenis motor dengan harga terbaik.</p>
    <p>Visi kami adalah menjadi dealer motor terkemuka di Bekasi dengan pelayanan terbaik dan harga yang kompetitif.</p>

</div>

<div class="team">
    <h1 class="font-bold text-3xl mb-2">Tim Kami</h1>
    <p>Kami memiliki tim profesional yang siap membantu Anda dalam memilih motor impian Anda.</p>
    <ul>
        <li class="font-semibold mt-2">John Doe - Manajer Penjualan</li>
        <li class="font-semibold">Jane Smith - Spesialis Produk</li>
        <li class="font-semibold">Mike Johnson - Layanan Pelanggan</li>
</div>
@endsection


<style>       
    
    h1 {
        text-align: center;
        margin-top: 20px;
    }

    p {
        text-align: center;
        font-size: 20px;
        margin-top: 10px;
    }

    .team {
        margin-top: 30px;
        text-align: center;
    }

    .team ul {
        list-style-type: none;
        padding: 0;
    }

    .team h2 {
        margin-bottom: 15px;
    }
    
</style>

