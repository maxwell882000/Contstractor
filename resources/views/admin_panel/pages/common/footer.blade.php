{{--@extends("admin_panel.main_layout")--}}

{{--@section("container")--}}
{{--    <div class="col-8 grid-margin stretch-card">--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <h4 class="card-title">Footer</h4>--}}
{{--                <form method="post" class="forms-sample" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <input style="display: none" type="number" name="id" value="{{$banner->id ?? ""}}"/>--}}
{{--                    @include("admin_panel.helper.form_helper.title", ["title"=>$banner])--}}
{{--                    @include("admin_panel.helper.form_helper.mini_header", ["mini_header"=>$banner])--}}
{{--                    @include("admin_panel.helper.form_helper.multi_button", ["buttons"=> [$banner->button ?? []], "length" => 1])--}}
{{--                    @include("admin_panel.helper.form_helper.image", ["image"=>$banner->image ?? ""])--}}
{{--                    <button type="submit" class="btn btn-primary mr-2">Submit</button>--}}
{{--                    <a href="{{route("admin.index")}}" class="btn btn-light">Назад</a>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}
