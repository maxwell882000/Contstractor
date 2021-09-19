@extends("admin_panel.form_layout_input")
@section("title","Категории")

@section("action"){{$category["path"]??""}}@endsection

@section("id"){{$category["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.name", ["text"=>$category??""])
@endsection

