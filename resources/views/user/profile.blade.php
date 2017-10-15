@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Profil Kamu</h1>
            <hr>
			<h2>Pesanan kamu </h2>
			@foreach( $orders as $order)
				<div class="panel panel-primary">
					<div class="panel-body">
						<ul class="list-group">
							@foreach($order->cart->items as $item)
								<li class="list-group-item">
                                    <span class="badge"> $ {{ $item['price'] }}</span>
									{{ $item['item']['title'] }} | {{$item['qty']}} Biji
								</li>
							@endforeach
						</ul>
					</div>
					<div class="panel-footer">
						<strong>Total Harga : $ {{ $order->cart->totalPrice }}</strong>
					</div>
				</div>
			@endforeach
    	</div>
   </div>
@endsection