@extends("admin_panel.form_layout_input")
@section("title","Главный Банер")
@section("id"){{$banner["id"]??""}}@endsection
@section("form")
    <input name="type" value="{{$banner["type"]}}" style="display: none"/>
    @include("admin_panel.helper.form_helper.title", ["title"=>$banner??""])
    @include("admin_panel.helper.form_helper.image", ["image"=>$banner->image??""])
@endsection

