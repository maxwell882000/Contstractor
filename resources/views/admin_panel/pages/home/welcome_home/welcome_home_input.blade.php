@extends("admin_panel.main_layout")

@section("container")
    <div class="col-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Заполните Приветствие</h4>
                <form method="post" class="forms-sample">
                    @csrf
                    <input style="display: none" type="number" name="id" value="{{$object->id ?? ""}}"/>
                    @include("admin_panel.helper.form_helper.title", ["title"=>$object])
                    @include("admin_panel.helper.form_helper.body", ["body"=>$object])
                    @include("admin_panel.helper.form_helper.multi_button", ["buttons"=> [$object->button ?? []], "length" => 1])
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{route("admin.index")}}" class="btn btn-light">Назад</a>
                </form>
            </div>
        </div>
    </div>
@endsection
