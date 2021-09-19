@extends("admin_panel.form_layout_input")
@section("title","Продукты для шоп")

@section("action"){{$images["path"]??""}}@endsection

@section("id"){{$images["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.product", ["product"=>$images])
    @include("admin_panel.helper.form_helper.image", ["image"=>$images->image??""])
    <x-admin-panel.category.category :model="\App\Models\Shop\CategoryShop::class" :object="$images"/>
@endsection
