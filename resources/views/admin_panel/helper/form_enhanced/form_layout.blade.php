@extends("admin_panel.main_layout")
{{--
    key === for table for send to db (<input name=$key/>)
    list === for table
    route_show === for table
    route_delete === for table

    object ==== actual object
    route_submit_text ==== where the text will be sended to store in db and redirected back
    show_name ==== helper text which will be displayed above

    input_name ==== the key which will be send to db
    max_length_create ==== the max length to create additional object

    title ==== title for the page

    route_to_add_list ==== new object will be assigned to the list
--}}
@section("container")

    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title align-self-center">{{$title}}</h4>
                <br/>
                <form method="post" action="{{route($route_submit_text)}}" enctype="multipart/form-data">
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
                    <input style="display: none" type="number" name="id" value="{{$object->id ?? ""}}"/>
                    <div class=" col-lg-12 row justify-content-between align-center">
                        @include("admin_panel.helper.form_helper.text", [
                        "text"=>$object ?? [],
                        "show_name"=>$show_name,
                        "input_name"=>$input_name])
                    </div>
                    @yield("additional_input_for_title")
                    <button type="submit" class="btn btn-info btn-rounded">Сохранить</button>
                </form>
                <br/>
                @if($object)
                    <div class="row justify-content-between align-center">
                        <h4 class="card-title align-self-center">Cписок {{$title}}</h4>
                        @if(!($max_length_create) || $list->count() < $max_length_create)
                            <div class="row justify-content-end align-center">
                                <a href="{{route($route_to_add_list, $object->id)}}"
                                   class="btn btn-info btn-rounded">Создать</a>
                            </div>
                        @endif
                    </div>
                    @include("admin_panel.helper.form_helper.table",
                   ["key"=>$key,
                   "list"=>$list,
                   "route_show"=>$route_show,
                   "route_delete"=>$route_delete
                   ])
                @endif
            </div>
        </div>
    </div>
@endsection
