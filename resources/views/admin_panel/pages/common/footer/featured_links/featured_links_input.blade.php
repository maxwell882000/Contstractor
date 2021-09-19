@extends("admin_panel.form_layout_input")
@section("title","Featured Link")

@section("action"){{$featured_links["path"]??""}}@endsection

@section("id"){{$featured_links["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.multi_button", ["buttons"=>[$featured_links->button??[]], "length"=>1])
@endsection

