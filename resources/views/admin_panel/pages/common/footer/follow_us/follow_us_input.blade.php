@extends("admin_panel.form_layout_input")
@section("title","Follow Us")

@section("action"){{$follow["path"]??""}}@endsection

@section("id"){{$follow["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.icon_html", ["icon_html"=>$follow??""])
@endsection

