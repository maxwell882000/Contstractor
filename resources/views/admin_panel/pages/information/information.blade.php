@extends("admin_panel.form_layout_input")
@section("title","Картиники для галлерие")

@section("action"){{$information["path"]??""}}@endsection

@section("id"){{$information["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.title", ["title"=>$information??""])
    @include("admin_panel.helper.form_helper.icon_action", ["icon_action"=>$information??""])
    @include("admin_panel.helper.form_helper.data", ["data"=>$information])
@endsection
@section("script")
    <script>
        $("#icon_data").attr("readonly", "true");
    </script>
@endsection

