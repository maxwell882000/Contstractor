@extends("admin_panel.form_layout_input")
@section("title","Картиники для галлерие")

@section("action"){{$images["path"]??""}}@endsection

@section("id"){{$images["id"]??""}}@endsection
@section("form")
    @include("admin_panel.helper.form_helper.image", ["image"=>$images->image??""])
    <x-admin-panel.category.category  :model="\App\Models\Gallery\CategoryGallery::class" :object="$images"/>
@endsection


