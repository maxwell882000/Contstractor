@extends("admin_panel.form_layout_input")
@section("title","Возле карты описание")
@section("id"){{$near_map["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.title", ["title"=>$near_map??""])
    @include("admin_panel.helper.form_helper.header", ["header"=>$near_map??""])
    @include("admin_panel.helper.form_helper.button", ["button"=> $near_map->button?? ""])
@endsection

