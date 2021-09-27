@include("admin_panel.helper.form_enhanced.form_list", [
    "title"=>"Cписок Сообщений",

    "key"=>"body",
    "list"=>$main,

    "route_show"=>$route["route_show"],
    "route_delete"=>$route["route_delete"],
    "route_to_add_list" =>"",

    "max_length_create" =>""
]);

