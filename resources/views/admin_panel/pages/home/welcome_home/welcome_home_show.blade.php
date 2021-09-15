@extends("admin_panel.main_layout")

@section("container")

    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title align-self-center">Приветствие</h4>
                <br/>
                <form method="post" action="{{route("admin.home.welcome_home_title_input")}}" enctype="multipart/form-data">
                    @csrf
                    <input style="display: none" type="number" name="id" value="{{$object->id ?? ""}}"/>
                    <div class=" col-lg-12 row justify-content-between align-center">
                        @include("admin_panel.helper.form_helper.title" , ["title"=>$object ?? []])
                    </div>
                    <h2>Картина справа</h2>
                    @include("admin_panel.helper.form_helper.image", ["image"=>$object->image ?? []])
                    <h2>Картина слева</h2>
                    @include("admin_panel.helper.form_helper.icon",["icon"=>$object->icon ?? []])
                    <button type="submit" class="btn btn-info btn-rounded">Сохранить</button>
                </form>
                <br/>
                @if($object)
                    <div class="row justify-content-between align-center">
                        <h4 class="card-title align-self-center">Дополнения для приветствия</h4>
                        @if($object->description()->count() < 2)
                            <div class="row justify-content-end align-center">
                                <a href="{{route("admin.home.welcome_home_show", 0)}}"
                                   class="btn btn-info btn-rounded">Создать Дополнения к Приветствию</a>
                            </div>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th colspan="2">№</th>
                                <th colspan="2">Содержимое</th>
                                <th colspan="2">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($object->description as $banner)
                                <tr>
                                    <td colspan="2">{{$loop->iteration}}</td>
                                    <td colspan="2">{{$banner["title^ru"]}}</td>
                                    <td colspan="1"><a href="{{route("admin.home.welcome_home_show", $banner->id)}}"
                                                       class="btn btn-info btn-rounded">Посмотреть</a></td>
                                    <td colspan="1"><a href="{{route("admin.home.welcome_delete", $banner->id)}}"
                                                       class="btn btn-danger btn-rounded">Удалить</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
