@extends("admin_panel.main_layout")

@section("container")

    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between align-center">
                    <h4 class="card-title align-self-center">Коментарии</h4>
                    <a href="{{route("admin.home.comments_show", 0)}}"
                       class="btn btn-info btn-rounded">Создать</a>
                </div>
                <br/>
                @include("admin_panel.helper.form_helper.table",
                   ["key"=>"name",
                   "list"=>$comment_list,
                   "route_show"=>"admin.home.comments_show",
                   "route_delete"=>"admin.home.comments_delete"
                   ])
            </div>
        </div>
    </div>

@endsection
