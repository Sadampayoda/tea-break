<div class="col-md-3 p-3 m-md-3 border rounded-4 shadow bg-light">
    <img src="{{asset('image/produk/'.$image)}}" alt="{{$name}}" class="img-fluid text-center mb-2">
    <h3 class="border-bottom">{{$name}}</h3>
    <p class="text-muted">Rp.{{number_format($price,2)}},-</p>
    <div class="card-body">
        <a href="" class="btn btn-outline-dark"><i class="bi bi-bag"></i> Pesan sekarang</a>
        <a href="" class="btn btn-outline-dark"><i class="bi bi-cart3"></i></a>
    </div>
</div>