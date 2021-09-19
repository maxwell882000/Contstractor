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
                @include("admin_panel.helper.form_helper.table",
                   ["key"=>"body",
                   "list"=>$banner_list,
                   "route_show"=>"admin.home.banner_show",
                   "route_delete"=>"admin.home.banner_delete"
                   ])
            </div>
        </div>
    </div>

@endsection
