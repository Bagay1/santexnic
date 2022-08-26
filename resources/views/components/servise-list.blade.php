<div class="container">
    <div class="row">
        <div class="text-center my-3">
            <div class="h1">Наши услуги</div>
        </div>
    </div>
    <div class="row">
        <div class="grid">
            @foreach($services as $item)
                <div class="card">
                    <div class="card-body">
                        <div class="image text-center mb-3">
                            <img src="{{asset('storage/images/icon/'.$item->image ) }}" class="img-fluid" alt="">
                        </div>
                        <h5 class="my-4">{{$item->title}}</h5>
                        <span>{{$item->short_text ?? ''}}</span>
                    </div>
                    <div class="card-footer">
                        <a data-bs-toggle="modal" data-bs-target="#mymodal" class="btn btn-sm btn-primary">Заказать</a>
                        <a href="{{route('services.single', $item->url)}}" class="btn btn-sm btn-dark">Подробнее</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>