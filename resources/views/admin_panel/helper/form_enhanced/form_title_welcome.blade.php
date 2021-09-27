@extends("admin_panel.helper.form_enhanced.form_layout")

@section("additional_input_for_title")
    <h2>Картина справа</h2>
    @include("admin_panel.helper.form_helper.image", ["image"=>$object->image ?? []])
    <h2>Картина слева</h2>
    @include("admin_panel.helper.form_helper.icon",["icon"=>$object->icon ?? []])
@endsection
