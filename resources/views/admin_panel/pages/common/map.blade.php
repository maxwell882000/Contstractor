@extends("admin_panel.form_layout_input")
@section("title","Карта Настройки")
@section("id"){{$map["id"]??""}}@endsection
@section("form")

    @include("admin_panel.helper.form_helper.title",["title"=>$map??""])

    @include("admin_panel.helper.form_helper.body",["body"=>$map??""])
    @include("admin_panel.helper.form_helper.line",
            ["line"=>$map??"",
             "input"=>"lat",
             "show"=> "Широта(latitude)"
           ])
    @include("admin_panel.helper.form_helper.line",
        ["line"=>$map??"",
         "input"=>"lang",
         "show"=> "Долгота(longitude)"
       ])

    @include("admin_panel.helper.form_helper.line",
    ["line"=>$map??"",
     "input"=>"hue_color",
     "show"=> "Цвет в hex"
   ])

@endsection

