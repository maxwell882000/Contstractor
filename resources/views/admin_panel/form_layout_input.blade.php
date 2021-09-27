@extends("admin_panel.main_layout")
@section("container")
    <div class="col-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield("title")</h4>

                    <form method="post" id="formID" action="@yield("action")" class="forms-sample" enctype="multipart/form-data">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                    <input style="display: none" type="number" name="id" value="@yield("id")"/>
                    @yield("form")
                    <button id="submit_button" type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{route("admin.index")}}" class="btn btn-light">Назад</a>
                </form>
            </div>
        </div>
    </div>

@endsection
