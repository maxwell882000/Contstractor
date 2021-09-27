@extends("admin_panel.form_layout_input")
@section("title","Logo")
@section("id"){{$logo["id"]??""}}@endsection
@section("form")

    <h3>Картинка на 150х80</h3>
    @include("admin_panel.helper.form_helper.image",["image"=>$logo->image??""])
    <h3>Картинка на 220х80</h3>
    @include("admin_panel.helper.form_helper.icon",["icon"=>$logo->icon??""])
@endsection

