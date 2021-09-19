@extends("admin_panel.form_layout_input")
@section("title","Карта Настройки")
@section("id"){{$styles["id"]??""}}@endsection
@section("form")

    @include("admin_panel.helper.form_helper.color",
            ["color"=>$styles??"",
             "input"=>"choice_color",
             "show"=> "Цвет выбора(Серый)"
           ])
    @include("admin_panel.helper.form_helper.color",
        ["color"=>$styles??"",
         "input"=>"main_color",
         "show"=> "Главный цвет(Белый)"
       ])
    @include("admin_panel.helper.form_helper.color",
    ["color"=>$styles??"",
     "input"=>"emphasize_color",
     "show"=> "Выделения цвет(Оранжевый)"
   ])
    @include("admin_panel.helper.form_helper.color",
    ["color"=>$styles??"",
     "input"=>"title_color",
     "show"=> "Цвет загаловка(Черный) "
    ])
    @include("admin_panel.helper.form_helper.color",
    ["color"=>$styles??"",
     "input"=>"secondary_color",
     "show"=> "Второстепенный цвет(Серый) "
    ])
    @include("admin_panel.helper.form_helper.color",
    ["color"=>$styles??"",
     "input"=>"intro_section_before_color_home",
     "show"=> "Цвет перед Главным банером (Ярко беллый)"
   ])
    @include("admin_panel.helper.form_helper.color",
   ["color"=>$styles??"",
    "input"=>"scroll_up_color",
    "show"=> "Цвет для указателя вверх (Черный)"
  ])
    @include("admin_panel.helper.form_helper.common_icon",["common_icon"=>$styles??""])
    <h3>Задняя картинка (stick)</h3>
    @include("admin_panel.helper.form_helper.image",["image"=>$styles->image??""])
    <h3>Preloader загрузить GIF</h3>
    @include("admin_panel.helper.form_helper.icon",["icon"=>$styles->icon??""])
@endsection

@section("script")
    <script>
        $(document).ready(function () {
            $("#submit_button").attr("type", "button");

        });

        function exceptionShow(object) {
            let helper = $(object).parent().find(".helper_color");
            helper.text("Пожалуйста помните правила rgba: 255,255,255,1");
            $(object).css('border-color', 'red');

            $(object).attr('required', 'true');
        }

        $("#submit_button").click(function () {
            let is_valid = true;

            $('.color').each(function () {
                    let exception = () => exceptionShow(this);
                    let array = $(this).val().split(",");
                    try {
                        if (array.length === 4) {
                            if (!(array.every(function (item) {
                                return 0 <= parseFloat(item) && 255.0 >= parseFloat(item);
                            }))) {
                                throw DOMException("e");
                            }
                        } else {
                            throw DOMException("e");
                        }

                    } catch (e) {
                        if (is_valid) {
                            $("html, body").animate({scrollTop: $(this).position().top + "px"});
                        }
                        is_valid = false;
                        exception();
                    }
                }
            );
            if (is_valid) {
                $("#formID").submit();
            } else {

            }


        });
    </script>

@endsection

