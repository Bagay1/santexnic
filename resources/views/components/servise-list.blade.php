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
                        <h5>{{$item->title}}</h5>
{{--                        <span>{{$item->price_id}}</span>--}}
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-sm btn-primary">Заказать</a>
                        <a href="{{route('services.single', $item->id)}}" class="btn btn-sm btn-dark">Подробнее</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>