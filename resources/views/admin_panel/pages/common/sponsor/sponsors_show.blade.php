@include("admin_panel.helper.form_enhanced.form_title_list", [
    "title"=>"Спонсоры",

    "key"=>"link",
    "list"=>$sponsor->sponsors ?? "",

    "object"=>$sponsor,
    "show_name"=>"Заголовок",
    "input_name"=>"title",

    "route_show"=>$route["route_show"],
    "route_delete"=>$route["route_delete"],
    "route_to_add_list"=>$route["route_to_add_list"],
    "route_submit_text"=>$route["route_submit_text"],

    "max_length_create" =>""
]);
