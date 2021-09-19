@extends("admin_panel.form_layout_input")
@section("title","Header")
@section("id"){{$header["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.button", [
    "button"=>$header->button??"",
])
@endsection

@section("script")
    <script>
        $("#link").attr("readonly","true");
    </script>
@endsection
