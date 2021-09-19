@extends("admin_panel.form_layout_input")
@section("title","Instagram feed")

@section("action"){{$instagram_feed["path"]??""}}@endsection

@section("id"){{$instagram_feed["id"]??""}}@endsection
@section("form")
    <h3>Картинка в footer</h3>
    @include("admin_panel.helper.form_helper.image", ["image"=>$instagram_feed->image??""])
    <h3>Preview картинки</h3>
    @include("admin_panel.helper.form_helper.icon", ["icon"=>$instagram_feed->icon??""])
@endsection

