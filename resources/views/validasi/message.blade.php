<div class="col p-2 ms-5 me-5">
    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    @if (session('failed'))
        <div class="alert alert-danger">{{session('failed')}}</div>
    @endif
</div>