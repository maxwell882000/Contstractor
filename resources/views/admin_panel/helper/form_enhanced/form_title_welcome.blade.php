@extends("admin_panel.helper.form_enhanced.form_layout")

@section("additional_input_for_title")
    <h2>Снизу Картинка PNG</h2>
    @include("admin_panel.helper.form_helper.image", ["image"=>$object->image ?? []])
@endsection
