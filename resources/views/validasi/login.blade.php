@extends('layout.app')

@section('content')
<div class="container">
    <div class="row  p-0 mt-3">
        <div class="col">
            <div class="row border bg-light rounded" >
                <div class="col-lg-6">
                    <div class="image-container-login">
                        <img src="{{asset('image/identitas/loginn.jpg')}}" class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="col-lg-6 ">
                    @include('validasi.message')
                    <div class="row  m-2 ">
                        <div class="col border p-2 ms-5 text-center buttons" id="button-login">
                            Login
                        </div>
                        <div class="col border p-2 me-5 text-center" id="button-register">
                            Registrasi
                        </div>
                    </div>
                    <section id="login" style="display:block;">
                        <h1 class="text-center mt-4">Login <img src="{{ asset('image/identitas/logo.jfif')}}" class="img-fluid" width="150" alt=""></h1>
                        <form action="{{route('validasi.login')}}" method="post">
                            @csrf
                            <div class="">
                                @include('layout.input',[
                                    'name' => 'email',
                                    'text' => 'Masukan Email Anda',
                                    'type' => 'email',
                                    'for' => 'email-input',
                                    'value' => old('email'),
                                    'class_div' => 'form-group mx-auto col-9 mt-5 mb-4 ',
                                    'class_form' => 'costum-height',
                                ]) 
                                
                                @include('layout.input',[
                                    'name' => 'password',
                                    'text' => 'Masukan Password',
                                    'type' => 'password',
                                    'for' => 'password-input',
                                    'value' => old('password'),
                                    'class_div' => 'form-group mx-auto col-9 mb-4',
                                    'class_form' => 'costum-height',
                                ])   
                                <div class="col-9 d-grid mx-auto mt-4">
                                    <button class="btn btn-dark">Masuk Aplikasi</button>
                                </div>
                            </div>
                        </form>
                        <div class="col-9 mx-auto mt-3">
                            
                            <p class="text-center mt-5 form-text">Kami menghormati privasi Anda. Dengan melanjutkan, Anda menyetujui Kebijakan Privasi Kami. Ada pertanyaan? Hubungi kami di <a href="sadampayodaa@gmail.com">sadampayodaa@gmail.com</a></p>
                        </div>
                    </section>
    
    
                    <section id="register" style="display:none; ">
                        <h1 class="text-center mt-4">Register <img src="{{ asset('image/identitas/logo.jfif')}}" class="img-fluid" width="150" alt=""></h1>
                        <form action="{{route('validasi.register')}}" method="post">
                            @csrf
                            <div class="">
                                @include('layout.input',[
                                    'name' => 'emails',
                                    'text' => 'Masukan Email Anda',
                                    'type' => 'email',
                                    'for' => 'email-register',
                                    'value' => old('email'),
                                    'class_div' => 'form-group mx-auto col-9 mt-5 mb-4 ',
                                    'class_form' => 'costum-height',
                                ]) 
                                
                                @include('layout.input',[
                                    'name' => 'passwords',
                                    'text' => 'Masukan Password',
                                    'type' => 'password',
                                    'for' => 'password-register',
                                    'value' => old('password'),
                                    'class_div' => 'form-group mx-auto col-9 mb-4',
                                    'class_form' => 'costum-height',
                                ])   
                                @include('layout.input',[
                                    'name' => 'konfirmasis',
                                    'text' => 'Masukan Konfirmasi Password',
                                    'type' => 'password',
                                    'for' => 'konfirmasi-input',
                                    'value' => old('konfirmasi'),
                                    'class_div' => 'form-group mx-auto col-9 mb-4',
                                    'class_form' => 'costum-height',
                                ])   
                                <div class="col-9 d-grid mx-auto mt-4">
                                    <button class="btn btn-dark">Daftar akun baru</button>
                                </div>
                            </div>
                        </form>
                        <div class="col-9 mx-auto mt-3">
                            
                            <p class="text-center mt-5 form-text">Kami menghormati privasi Anda. Dengan melanjutkan, Anda menyetujui Kebijakan Privasi Kami. Ada pertanyaan? Hubungi kami di <a href="sadampayodaa@gmail.com">sadampayodaa@gmail.com</a></p>
                        </div>
                    </section>
                </div>
            </div>      
           
        </div>
    </div>

</div>

<script src="{{asset('js/validation/index.js')}}"></script>
@endsection