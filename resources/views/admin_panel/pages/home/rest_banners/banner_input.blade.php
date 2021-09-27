@extends("admin_panel.form_layout_input")
@section("title","Заполните Банер")

@section("action"){{$banner["path"]??""}}@endsection

@section("id"){{$banner["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.body", ["body"=>$banner])
    @include("admin_panel.helper.form_helper.multi_button",
            ["buttons"=>$banner->button ?? [[],[]],
             "length"=>2])
    <h2>Background картинка</h2>
    @include("admin_panel.helper.form_helper.image", ["image"=>$banner->image ?? ""])
    <h2>Иконка сверху</h2>
    @include("admin_panel.helper.form_helper.icon", ["icon"=>$banner->icon ?? ""])
@endsection

