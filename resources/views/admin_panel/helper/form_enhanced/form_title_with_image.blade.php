@extends("admin_panel.helper.form_enhanced.form_layout")

@section("additional_input_for_title")
    @include("admin_panel.helper.form_helper.image", ["image"=>$image])
@endsection
