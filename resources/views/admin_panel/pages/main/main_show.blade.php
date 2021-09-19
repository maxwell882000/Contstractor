@extends("admin_panel.main_layout")

@section("container")

    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between align-center">
                    <h4 class="card-title align-self-center">Cписок Сообщений</h4>
                </div>
                <br/>
                @include("admin_panel.helper.form_helper.table",
                   ["key"=>"subject",
                     "list"=>$main ?? [],
                     "route_show"=>$route["route_show"],
                      "route_delete"=>$route["route_delete"],
                   ])
            </div>
        </div>
    </div>

@endsection
