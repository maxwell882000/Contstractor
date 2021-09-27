@extends("admin_panel.main_layout")

@section("container")

    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between align-center">
                    <h4 class="card-title align-self-center">{{$title}}</h4>
                    @if($route_to_add_list)
                        <a href="{{route($route_to_add_list, 0)}}"
                           class="btn btn-info btn-rounded">Создать</a>
                    @endif
                </div>
                <br/>
                @include("admin_panel.helper.form_helper.table",
                      ["key"=>$key,
                   "list"=>$list,
                   "route_show"=>$route_show,
                   "route_delete"=>$route_delete
                   ])
            </div>
        </div>
    </div>

@endsection
