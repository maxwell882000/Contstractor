@include("admin_panel.helper.form_enhanced.form_title_welcome", [
    "title"=>"Приветствие",

    "key"=>"desc",
    "list"=>$welcome_home->list_desc,
    "route_show"=>$route["route_show"],
    "route_delete"=>"",

    "route_to_add_list"=>$route["route_to_add_list"],

    "object"=>$welcome_home,
    "show_name"=>"Загаловок",
    "input_name"=>"title",


    "max_length_create"=>2,
     "route_submit_text"=>$route["route_submit_text"],

]);
