@extends('layout.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card p-3">
                    <div class="row d-flex justify-content-center mb-4">
                        <div class="col-6  border-bottom p-3 text-center ">
                            <h2>Keranjang</h2>
                        </div>
                    </div>
                    <div class="row border">
                        <div class="col-2 justify-content-center align-items-center">
                            <img src="{{ asset('image/produk/brown-sugar-bubble-chocolate-sundae.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <div class="row ">
                                <div class="col-2 ms-1">
                                    <button class="btn btn-dark p-2"><i class="bi bi-plus"></i></button>
                                </div>
                                <div class="col-4 ms-4  border text-center">
                                    <div class="m-2">
                                        2
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-dark p-2"><i class="bi bi-dash"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <h4>Rp.20.000,-</h4>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </div>
                    <div class="row border">
                        <div class="col-2 justify-content-center align-items-center">
                            <img src="{{ asset('image/produk/brown-sugar-bubble-chocolate-sundae.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <div class="row ">
                                <div class="col-2 ms-1">
                                    <button class="btn btn-dark p-2"><i class="bi bi-plus"></i></button>
                                </div>
                                <div class="col-4 ms-4  border text-center">
                                    <div class="m-2">
                                        2
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-dark p-2"><i class="bi bi-dash"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <h4>Rp.20.000,-</h4>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </div>
                    <div class="row border">
                        <div class="col-8 d-flex align-items-center">
                            <h3 class="ms-2">Total Harga</h3>
                        </div>
                        <div class="col-4  text-center">
                            <h3> Rp.40.000,-</h3>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-11 d-flex justify-content-end">
                            <button class="btn btn-dark">Checkout keranjang</button>
                            <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
