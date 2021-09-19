@extends("admin_panel.form_layout_input")
@section("title","Keep in touch")



@section("id"){{$keep["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.name", ["text"=>$keep??""])
@endsection

