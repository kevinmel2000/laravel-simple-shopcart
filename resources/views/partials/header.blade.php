<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('product.index')}}">Uke Photos shops <i class="fa fa-mars" aria-hidden="true"></i> </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('product.shoppingCart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Keranjang
          <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty:''}}</span>
          </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i> Pengaturan Akun <span class="caret"></span></a>
          <ul class="dropdown-menu">
            @if(Auth::check()) <!--kalau dia login-->
              <li ><a href="{{route('user.profile')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> User Profile </a></li>
               <li role="separator" class="divider"></li>
              <li><a href="{{route('user.logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a></li>
              @else <!--kalau dia tdk login login-->
                 <li><a href="{{route('user.signin')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Masuk</a></li>
                 <li><a href="{{route('user.signup')}}"><i class="fa fa-user-plus" aria-hidden="true"></i> Daftar</a></li>
              @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>