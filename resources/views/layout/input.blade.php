
<div class="row">
    <div class="{{$class_div}}">
        <label for="{{$for}}" class="form-label">{{$text}}</label>
        <input type="{{$type}}" name="{{$name}}" class="form-control {{$class_form}} @error($name) is-invalid @enderror" id="{{$for}}" value="{{$value}}">
        @error($name)
            <div class="form-text text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>