@extends('master')

@section('content')
<div class="custom-product">
    <div class="col-sm-10">
     <table class="table">
        <tbody>
        <tr>
            <td>Jumlah</td>
            <td>Rp. {{$total}}</td>
        </tr>
        <tr>
            <td>Pajak</td>
            <td>Rp. 0</td>
        </tr>
        <tr>
            <td>Pengiriman</td>
            <td>Rp. 10.000</td>
        </tr>
        <tr>
            <td>Total Pembelian</td>
            <td>Rp. {{$total+10000}}</td>
        </tr>
        </tbody>
    </table>
    <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="alamat" placeholder="masukkan alamat anda" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">Pembayaran Dengan</label><br><br>
                <input type="radio" value="cash" name="pembayaran"> <span>Pembayaran E-Wallet</span> <br><br>
                <input type="radio" value="cash" name="pembayaran"> <span>Pembayaran Debit</span><br><br>
                <input type="radio" value="cash" name="pembayaran"> <span>Pembayaran COD</span> <br><br>
            </div>
            <button type="submit" class="btn btn-success">Pesan</button>
        </form>
    </div>
    </div>
</div>
@endsection 