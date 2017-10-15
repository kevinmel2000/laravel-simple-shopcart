@extends('layouts.master')

@section('title')
    Belanja Uke
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-md-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{  $product ['qty'] }}</span>
                            <strong> {{ $product['item']['title'] }}</strong>
                            <span class="label label-success">{{$product['price'] }}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('product.kurangiSatu',['id'=> $product['item']['id']])}}">Hapus 1 item</a></li>
                                    <li><a href="{{route('product.hapussemua',['id'=> $product['item']['id']])}}">Hapus semua </a></li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-md-offset-3">
               <strong>Total:{{$totalPrice}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-md-offset-3">
              <a href ="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout belanja</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-md-offset-3">
              <h2>Tidak ada item di keranjang</h2>
            </div>
        </div>


    @endif
@endsection