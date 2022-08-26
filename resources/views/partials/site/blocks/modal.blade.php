<div class="modal fade bd-example-modal-lg" id="mymodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h4>Заявка для вызова специалиста</h4>
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal"><i
                            class="mdi mdi-close"></i></button>
            </div>
            <div class="modal-body">
                <p class="d-block">Заполите форму для связи нашего специалиста с вами, мы перезвоним вам в течении 15 минуты</p>
                <form id="formtelegram"
                        {{--                      action="{{route('postMessage')}}" --}}
                        {{--                      method="post"--}}
                >
                    @csrf
                    <div class="row">
                        <div class="col-md-6 my-2">
                            @if(isset($title))
                                <input type="text" hidden value="{{$title}}">
                            @endif
                            <label for="">Ваше имя</label>
                            <input type="text" name="name" class="form-control" placeholder="Введите ваше имя">
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="">Ваш телефон</label>
                            <input type="text" name="tel" class="form-control" placeholder="Введите ваш телефон"></div>
                        <div class="col-md-12 my-2">
                            <label for="">Опишите вашу задачу (необязательно)</label>
                            <textarea class="form-control" name="comments" id="" cols="30" rows="40" placeholder="Ваша проблема"></textarea></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">Отправить</button>
                    </div>
                    <div class="result" id="result"></div>
                </form>
            </div>


        </div>
    </div>
</div>


@push('scripts')
    <script>
        formtelegram.onsubmit = async (e) => {
            e.preventDefault();

            let response = await fetch("{{route('postMessage')}}", {
                method: 'POST',
                body: new FormData(formtelegram)
            });

            let result = response.status
            let message
            if (result == 200) {
                message = 'Ваша заявка отправлена'
            } else {
                message = 'Что то пошло не так'
            }

            document.querySelector('.result').innerHTML = message;
        }

    </script>

@endpush