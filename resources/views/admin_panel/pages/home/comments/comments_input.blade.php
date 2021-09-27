@extends("admin_panel.form_layout_input")
@section("title","Коммент")

@section("action"){{$comments["path"]??""}}@endsection

@section("id"){{$comments["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.body", ["body"=>$comments])
    @include("admin_panel.helper.form_helper.name", [
        "text"=>$comments,
     ])
    @include("admin_panel.helper.form_helper.profession", [
         "text"=>$comments,
    ])
    @include("admin_panel.helper.form_helper.image", ["image"=>$comments->image ?? ""])
@endsection

