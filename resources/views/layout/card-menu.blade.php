<div class="card mb-3 shadow" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('image/produk/' . $image) }}" class="img-fluid rounded-start" alt="{{ $image }}">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $name }}</h5>
                <p class="card-text"><small class="text-body-secondary">Rp.{{ number_format($price) }},-</small></p>
                <p class="card-text">{{ $word }} <a
                        href="{{ route('varian.show', ['id' => $id]) }}">Selengkapnya....</a></p>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-3">
                        <form action="{{ route('varian.show', ['id' => $id]) }}" method="GET">
                            <button class="btn btn-outline-dark">Detail</button>
                        </form>
                    </div>
                    <div class="col-9">
                        <a href="" class="btn btn-outline-dark"><i class="bi bi-bag"></i> Pesan sekarang</a>
                        <button data-id="{{$id}}" name="id_menu" class="btn btn-outline-dark id_menu"
                            href="http://"><i class="bi bi-cart3"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


