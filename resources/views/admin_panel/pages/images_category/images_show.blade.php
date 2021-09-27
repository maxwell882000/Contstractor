@include("admin_panel.helper.form_enhanced.form_list", [
    "title"=>"Cписок Картинок",

    "key"=>"id",
    "list"=>$images ?? [],
    "route_show"=>$route["route_show"],
    "route_delete"=>$route["route_delete"],
    "route_to_add_list"=>$route["route_add"],

    "max_length_create" =>""
]);
