@extends("admin_panel.form_layout_input")
@section("title","Hotline")

@section("action"){{$hotline["path"]??""}}@endsection

@section("id"){{$hotline["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.mini_header", ["mini_header"=>$hotline??""])

    @include("admin_panel.helper.form_helper.body", ["body"=>$hotline??""])

    @include("admin_panel.helper.form_helper.phone", ["phone"=>$hotline??""])

    <h2>Картинка справа</h2>
    @include("admin_panel.helper.form_helper.image", ["image"=>$hotline->imageRight??""])

    <h2>Картинка слева</h2>
    @include("admin_panel.helper.form_helper.icon", ["icon"=>$hotline->imageLeft??""])
@endsection

