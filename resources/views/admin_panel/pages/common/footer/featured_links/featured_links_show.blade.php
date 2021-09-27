@include("admin_panel.helper.form_enhanced.form_title_list", [
    "title"=>"Featured links",

    "key"=>"name",
    "list"=>$featured_links->link ?? "",
     "route_show"=>$route["route_show"],
    "route_delete"=>$route["route_delete"],

    "route_to_add_list"=>$route["route_to_add_list"],

    "object"=>$featured_links,
    "show_name"=>"Название",
    "input_name"=>"name",


    "max_length_create"=>6,
     "route_submit_text"=>$route["route_submit_text"],

]);
