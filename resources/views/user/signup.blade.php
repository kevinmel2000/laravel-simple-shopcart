
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
				  <h3>Ayo daftar sekarang untuk membeli foto uke kesayanganmu! </h3>
				  <h6> Banyak keuntungan yang kamu dapat kalau kamu daftar sebagai member! </h6>
				  

				  <form action="{{ route('user.signup') }}" method="post">
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="text" id="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary"><i class="fa fa-gratipay" aria-hidden="true"></i> Daftar</button> 
				<button type="button" class="btn btn-default btn-xs pull-right clearfix" data-toggle="modal" data-target="#myModal">Syarat dan Ketentuan</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h4 class="modal-title" id="myModalLabel">Syarat & Ketentuan</h4>
						      </div>
						      <div class="modal-body">
						        1.Kamu haruslah menjadi homo<br>
						        2.Kamu adalah seorang homo<br>
						        3.Kamu adalah pria yang menyukai sesama pria<br>
						        4.Kamu adalah seorang SEME<br>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Ya,saya mengerti <i class="fa fa-heart-o" aria-hidden="true"></i></button>
						      </div>
						    </div>
						  </div>
						</div>
				{{ csrf_field() }}
			</form>
			</div>


			
    	</div>
   </div>
@endsection