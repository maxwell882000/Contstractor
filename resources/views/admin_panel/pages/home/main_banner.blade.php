@extends("admin_panel.form_layout_input")
@section("title","Заполните Главный Банер")
@section("id"){{$banner["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.title", ["title"=>$banner])
    @include("admin_panel.helper.form_helper.mini_header", ["mini_header"=>$banner])
    @include("admin_panel.helper.form_helper.multi_button", ["buttons"=> [$banner->button ?? []], "length" => 1])
    @include("admin_panel.helper.form_helper.image", ["image"=>$banner->image ?? ""])
@endsection


