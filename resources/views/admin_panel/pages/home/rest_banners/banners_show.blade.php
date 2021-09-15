@extends("admin_panel.main_layout")

@section("container")

    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between align-center">
                    <h4 class="card-title align-self-center">Остальные Банеры</h4>
                    <a href="{{route("admin.home.banner_show", 0)}}"
                       class="btn btn-info btn-rounded">Создать</a>
                </div>
                <br/>
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
                        @foreach($banner_list as $banner)
                            <tr>
                                <td colspan="2">{{$loop->iteration}}</td>
                                <td colspan="2">{{$banner["body^ru"]}}</td>
                                <td colspan="1"><a href="{{route("admin.home.banner_show", $banner->id)}}"
                                                   class="btn btn-info btn-rounded">Посмотреть</a></td>
                                <td colspan="1"><a href="{{route("admin.home.banner_delete", $banner->id)}}"
                                                   class="btn btn-danger btn-rounded">Удалить</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
