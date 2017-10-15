
@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offfset-4">
			
			@if(count($errors)>0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
				</div>
			 @endif


				 <div class="jumbotron">
				  <h3>Ada akun? Login yuk! </h3>
				  <h6>Banyak keuntungan yang kamu dapat kalau kamu daftar sebagai member! </h6>
				  

				  <form action="{{ route('user.signin') }}" method="post">
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="text" id="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary"><i class="fa fa-gratipay" aria-hidden="true"></i> Login</button> 
				{{ csrf_field() }}
					  <h6> Ga punya akun? <a href="{{route('user.signup')}}">Daftar Dongse!</a></h6>
			</form>
			</div>

    	</div>
   </div>
@endsection