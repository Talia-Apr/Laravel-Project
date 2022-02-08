@extends('master')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-6">
        <img class="deskripsi-img" src="{{$products['gambar']}}" alt="">
    </div>
    <div class="col-sm-6">
        <a href="/">Kembali</a>
        <h2>{{$products['nama']}}</h2>
        <h3>Harga : Rp. {{$products['harga']}}</h3>
        <h3>Deskripsi : Rp. {{$products['deskripsi']}}</h3>
        <h3>Kategori : {{$products['kategori']}}</h3>
        <br><br>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$products['id']}}>
            <button class="btn btn-primary">Masukkan ke Keranjang</button>
        </form>
        <br><br>
        <button class="btn btn-success">Beli Sekarang</button>
    </div>
    </div>
</div>
@endsection