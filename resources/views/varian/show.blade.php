@extends('layout.app')

@section('content')

<div class="container">
    <div class="row mt-1">
        <div class="col-md-6">
            <div class="card  shadow rounded-4">
                <img src="{{asset('image/produk/'.$menu[0]->image)}}" class="card-img img-fluid rounded-4"  alt="{{$menu[0]->name}}">
                <div class="d-flex justify-content-center text-center align-items-end card-img-overlay text-dark">
                    @if ($menu[0]->id != 1 )
                        <a class="btn btn-light shadow-lg border  m-3 fs-3" href="{{route('varian.show',['id' => $menu[0]->id - 1])}}"><i class="bi bi-arrow-left"></i></a>
                    @else
                        <a class="btn btn-light shadow-lg border  m-3 fs-3" href="{{route('varian.show',['id' => $count])}}"><i class="bi bi-arrow-left"></i></a>
                    
                    @endif
                    <a class="btn btn-light shadow-lg border  m-3 fs-3" href=""><i class="bi bi-share-fill"></i></a>
                    @if ($menu[0]->id == $count)
                        <a class="btn btn-light shadow-lg border  m-3 fs-3" href="{{route('varian.show',['id' => 1])}}"><i class="bi bi-arrow-right"></i></a>
                    @else
                        <a class="btn btn-light shadow-lg border  m-3 fs-3" href="{{route('varian.show',['id' => $menu[0]->id + 1])}}"><i class="bi bi-arrow-right"></i></a>

                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-5 fw-lighter">
            <div class="row">
                <div class="col-12 border-bottom border-dark pb-2">
                    <h1 class="fw-lighter mb-4">{{$menu[0]->name}}</h1>
                    <p class="fs-2">Rp.{{number_format($menu[0]->price,2)}},-</p>
                    <p class="fs-2" style="text-align: justify">Home  /  Varian  /  <i class="fw-medium">Detail</i></p>
                    <p class="fs-5">{{$menu[0]->description}}</p>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center mt-2">
                        <div class="col-6 d-grid m-1">
                            <a href="" class="btn btn-outline-light border border-dark text-dark  btn-square fw-lighter fs-2"><i class="bi bi-cart3"></i></a>
                        </div>
                        <div class="col-6 d-grid m-1">
                            <a href="" class="btn btn-outline-light border border-dark text-dark  btn-square fw-lighter fs-2"><i class="bi bi-bag"></i> Pesan</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="col-4 d-grid ">
                            <a href="" class="btn btn-outline-light border border-dark text-dark btn-square fw-lighter fs-2"><i class="bi bi-person-arms-up "></i> 120</a>
                        </div>
                        <div class="col-8 d-grid ">
                            <a href="" class="btn btn-dark btn-square fw-lighter fs-2"><i class="bi bi-star-fill"></i> Lihat Komentar</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 input-group">
                    <button id="whislist" class=" fs-1 border-0"><i id="love" class="bi bi-heart"></i></button><small class="d-flex align-items-center fs-2 fw-lighter text-body-secondary">Add to wishlist</small>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        var whislist = {{$whislist}}
        if(whislist){
            $('#love').addClass('bi bi-heart-fill text-danger')
            $('#love').removeClass('bi bi-heart')
            $('#whislist').on('click',function(){
                $.ajax({
                    type:'GET',
                    url : "{{route('varian.whislist.hapus')}}",
                    data:"id="+{{$menu[0]->id}},
                    success:function(data){
                        $('#love').removeClass('bi bi-heart-fill text-danger')
                        $('#love').addClass('bi bi-heart')
                    }
                })
            })
        }else{
            $('#love').removeClass('bi bi-heart-fill text-danger')
            $('#love').addClass('bi bi-heart')
            $('#whislist').on('click',function(){
                $.ajax({
                    type:'GET',
                    url : "{{route('varian.whislist')}}",
                    data:"menu="+{{$menu[0]->id}},
                    success:function(data){
                        $('#love').addClass('bi bi-heart-fill text-danger')
                        $('#love').removeClass('bi bi-heart')
                    }
                })
            })
        }
    })
</script>
@endsection