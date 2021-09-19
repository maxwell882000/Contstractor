@extends("admin_panel.form_layout_input")
@section("title","Работник")

@section("action"){{$persons["path"]??""}}@endsection

@section("id"){{$persons["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.name", ["text"=>$persons??""])
    @include("admin_panel.helper.form_helper.body", ["body"=>$persons??""])
    @include("admin_panel.helper.form_helper.image", ["image"=>$persons->image??""])
@endsection

