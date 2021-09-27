@extends("admin_panel.form_layout_input")
@section("title","Приветствие")

@section("action"){{$welcome_home["path"]??""}}@endsection

@section("id"){{$welcome_home["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.title", ["title"=>$welcome_home])
    @include("admin_panel.helper.form_helper.body", ["body"=>$welcome_home])
    @include("admin_panel.helper.form_helper.multi_button", ["buttons"=> [$welcome_home->button ?? []], "length" => 1])
    @include("admin_panel.helper.form_helper.image", ["image"=>$welcome_home->image ?? []])
@endsection

