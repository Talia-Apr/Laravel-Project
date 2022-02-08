@extends('master')

@section('content')
<div class="custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
        <img src="{{$item['gambar']}}" class="slider-img" alt="...">
        <div class="carousel-caption slider-text">
          <h3>{{$item['nama']}}</h3>
          <p>{{$item['deskripsi']}}</p>
        </div>
      </a>
    </div>
    @endforeach
  </div>
  <a class="left carousel-control"  href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="trending-wrapper">
    <h3>Trending Products</h3>
    @foreach($products as $item)
      <div class="trending-item">
        <a href="detail/{{$item['id']}}">
          <img src="{{$item['gambar']}}" class="trending-img" alt="...">
            <div class="">
              <h3>{{$item['nama']}}</h3>
            </div>
        </a>
      </div>
    @endforeach
</div>
</div>
@endsection