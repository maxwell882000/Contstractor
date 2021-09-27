@extends("admin_panel.form_layout_input")
@section("title","Logo")
@section("id"){{$common["id"]??""}}@endsection
@section("form")
    <h3>Титульный лист который появиться во вкладке</h3>
    @include("admin_panel.helper.form_helper.title",["title"=>$common??""])

    @include("admin_panel.helper.form_helper.line",[
    "input"=>"google_api_key",
    "line"=>$common??"",
    "show" =>"Iframe Google maps"])
@endsection

