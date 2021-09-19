@extends("admin_panel.form_layout_input")
@section("title","Заполните О Компании")

@section("action"){{$company_about["path"]??""}}@endsection

@section("id"){{$company_about["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.title", ["title"=>$company_about??""])
    @include("admin_panel.helper.form_helper.header", ["header"=>$company_about??""])
    @include("admin_panel.helper.form_helper.body", ["body"=>$company_about??""])
    @include("admin_panel.helper.form_helper.footer", ["footer"=>$company_about??""])
    @include("admin_panel.helper.form_helper.key_word", ["key_word"=>$company_about??""])
@endsection

