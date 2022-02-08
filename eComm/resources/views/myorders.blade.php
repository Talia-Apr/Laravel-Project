@extends('master')

@section('content')
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Pesanan Saya</h4>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gambar}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Nama : {{$item->nama}}</h2>
                      <h5>Status Pengiriman : {{$item->status}}</h5>
                      <h5>Alamat : {{$item->alamat}}</h5>
                      <h5>Status Pembayaran: {{$item->status_pembayaran}}</h5>
                      <h5>Metode Pembayaran : {{$item->metode_pembayaran}}</h5>

                    </div>
             </div>
            </div>
            @endforeach
          </div>
     </div>
</div>
@endsection 