@extends("admin_panel.main_layout")
@section("container")
    <div class="col-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Коммент</h4>
                <form method="post" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <input style="display: none" type="number" name="id" value="{{$comment->id ?? ""}}"/>
                    @include("admin_panel.helper.form_helper.body", ["body"=>$comment])
                    @include("admin_panel.helper.form_helper.name", [
                        "text"=>$comment,
                     ])
                    @include("admin_panel.helper.form_helper.profession", [
                         "text"=>$comment,
                    ])
                    @include("admin_panel.helper.form_helper.image", ["image"=>$comment->image ?? ""])
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{route("admin.index")}}" class="btn btn-light">Назад</a>
                </form>
            </div>
        </div>
    </div>

@endsection
