@extends("admin_panel.form_layout_input")
@section("title","Текст слева")



@section("id"){{$text["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.body", ["body"=>$text??""])
@endsection

