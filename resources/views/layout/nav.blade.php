<nav class="navbar navbar-expand-lg p-3 " style="background: linear-gradient(to left,#d0f0c0,black)">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{asset('image/identitas/logos.png')}}" alt="logo" class="img-fluid" height="150" width="150"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse  navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link   text-light"href="{{route('home')}}"><i class="bi bi-house-door"></i> Home</a>
          <a class="nav-link  text-light" href="{{route('varian')}}">Varians</a>
          <a class="nav-link  text-light" href="#">Pricing</a>
          
          <a class="nav-link  text-light" href="{{route('login')}}" ><i class="bi bi-box-arrow-in-right"></i> Login</a>  
          
        </div>
      </div>
    </div>
  </nav>