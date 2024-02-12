@extends('layout.app')

@section('content')
<div class="container">
    <div class="row mt-1">
        <div class="col">
            <p class="fs-3">
                <i class="bi bi-star-fill text-warning"></i> 
                Produk terbaik 
            </p>
        </div>
        <div class="col text-end">
            <a href="/" class="fs-3 text-danger">Pesan Semua</a>
        </div>
    </div>
    <div class="row d-flex justify-content-md-evenly border-bottom pb-4 ">
        @foreach ($rating as $item)
            @include('layout.card',[
                'image' => $item->image,
                'name' => $item->name,
                'price' => $item->price,
                'id' => $item->id
            ])
        @endforeach
    </div>
    
    
    <div class="row mt-2">
        <div class="col">
            <p class="fs-3"><i class="bi bi-cart-check-fill"></i> Produk Terlaris</p>
        </div>
        <div class="col text-end">
            <a href="/" class="fs-3 text-danger">Pesan Semua</a>
        </div>
    </div>
    <div class="row d-flex mb-5 justify-content-md-evenly border-bottom pb-4">
        @foreach ($rating as $item)
            @include('layout.card',[
                'image' => $item->image,
                'name' => $item->name,
                'price' => $item->price,
                'id' => $item->id
            ])
        @endforeach
    </div>
</div>
<section style="background: #d0f0c0">
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Let's Go Belanja <img src="{{asset('image/identitas/logos.png')}}" alt="" class="img-fluid" width="100" height="100"></h1>
            </div>
        </div>
        <div class="row">
            <div class="col pb-5 text-center mt-3">
                <p>Dengan beragam pilihan yang ada, mari kita jelajahi menu dan temukan sesuatu yang cocok untuk kita nikmati bersama.</p>
            </div>
        </div>
    </div>
</section>

<div class="container mt-5">
    <div class="row border-bottom pb-3 mb-5">
        <div class="col-2"> 
            <select class="form-select" name="select" id="select" aria-label="Default select example">
                <option >Categories</option>
                @foreach($categories as $item)
                    <option value="{{$item->varian}}">{{$item->varian}}</option>
                @endforeach
              </select>
        </div>
        <div class="col-2">
            <select class="form-select" name="price" id="price" aria-label="Default select example">
                <option selected>Harga</option>
                <option value="mahal">Termahal</option>
                <option value="murah">Termurah</option>
            </select>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5" id="data">
        @foreach ($menu as $item )
            <div class="col-md-6">
                @include('layout.card-menu',[
                    'name' => $item->name,
                    'image' => $item->image,
                    'price' => $item->price,
                    'word' => $item->word,
                    'id' => $item->id
                ])
            </div>  
        @endforeach
    </div>
</div>



<script>
    $(document).ready(function(){
        $('#select').on('change',function(){
            var select = $('#select').val();
            // console.log(select)
            if(select != ''){
                // $('#data').html(
                //     '<p class="text-muted text-center fs-3"><i class="bi bi-cup-hot-fill"></i> Loading.....</p>'
                // )
                $.ajax({
                    type:'GET',
                    url : "{{route('varian.select')}}",
                    data:"select="+ select,
                    success:function(data){
                        // console.log(data)
                        $('#data').html(data)
                    } 
                })
            }
        })
        $('#price').on('change',function(){
            var price = $('#price').val();
            
            $.ajax({
                type:'GET',
                url :"{{route('varian.price')}}",
                data:"price="+price,
                success:function(data){
                    $('#data').html(data)
                }
            })
        })
    })
</script>
@endsection

