@extends("admin_panel.form_layout_input")
@section("title","Загаловок для формы отправки сообщений")
@section("id"){{$form_title["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.title", ["title"=>$form_title??""])
    @include("admin_panel.helper.form_helper.text", [
    "text"=>$form_title??"",
    "show_name"=>"Название Кнопки",
    "input_name"=>"button_name"])
@endsection

