@extends("admin_panel.form_layout_input")
@section("title","Работник")

@section("action"){{$sponsor["path"]??""}}@endsection

@section("id"){{$sponsor["id"]??""}}@endsection
@section("form")

    @include("admin_panel.helper.form_helper.line", ["line"=>$sponsor??"",
        "input"=>"link","show"=>"Линк чтоб перенаправить к спонсарам"])
    @include("admin_panel.helper.form_helper.image", ["image"=>$sponsor->image??""])
@endsection

