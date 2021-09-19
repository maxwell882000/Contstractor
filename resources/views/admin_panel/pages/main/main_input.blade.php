@extends("admin_panel.main_layout")

@section("container")
    <div class="col-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cообщение</h4>
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input id="name" type="text" name="title^ru" class="form-control" value="{{$main["name"] ?? ""}}"
                           disabled>
                </div>
                <div class="form-group">
                    <label for="email">Почта</label>
                    <input id="email" type="text" name="title^ru" class="form-control" value="{{$main["email"] ?? ""}}"
                           disabled>
                </div>
                <div class="form-group">
                    <label for="subject">Загаловок</label>
                    <input id="subject" type="text" name="title^ru" class="form-control"
                           value="{{$main["subject"] ?? ""}}"
                           disabled>
                </div>
                <div class="form-group">
                    <label for="message">Сообщение</label>
                    <textarea id="message" rows="8" type="text" name="title^ru" class="form-control"
                              disabled>{{$main["message"] ?? ""}}
                    </textarea>
                </div>
            </div>
        </div>
    </div>

@endsection
