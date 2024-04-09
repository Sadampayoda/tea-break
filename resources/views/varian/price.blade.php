@foreach ($menu as $item )
    <div class="col-md-6">
        @include('layout.card-menu',[
            'name' => $item->name,
            'image' => $item->image,
            'price' => $item->price,
            'word' => $item->word,
            'price' => $item->id
        ])
    </div>  
@endforeach