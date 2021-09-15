@extends("admin_panel.main_layout")

@section("container")
    <div class="col-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Заполните Главный Банер</h4>
                <form method="post" action="{{route("admin.home.banner_input")}}" class="forms-sample"
                      enctype="multipart/form-data">
                    @csrf
                    <input style="display: none" type="number" name="id" value="{{$banner->id ?? ""}}"/>
                    @include("admin_panel.helper.form_helper.body", ["body"=>$banner])
                    @include("admin_panel.helper.form_helper.multi_button",
                            ["buttons"=>$banner->button ?? [[],[]],
                             "length"=>2])
                    <h2>Background картинка</h2>
                    @include("admin_panel.helper.form_helper.image", ["image"=>$banner->image ?? ""])
                    <h2>Иконка сверху</h2>
                    @include("admin_panel.helper.form_helper.icon", ["icon"=>$banner->icon ?? ""])
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{route("admin.index")}}" class="btn btn-light">Назад</a>
                </form>
            </div>
        </div>
    </div>

@endsection
