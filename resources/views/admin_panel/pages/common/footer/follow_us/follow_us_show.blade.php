@include("admin_panel.helper.form_enhanced.form_title_list", [
    "title"=>"Follow Us",
// This will be send to loop
    "key"=>"name",
    "list"=>$follow->iconHtml ?? "",
    "route_show"=>$route["route_show"],
    "route_delete"=>$route["route_delete"],
// this for a button to create new items
    "route_to_add_list"=>$route["route_to_add_list"],
// This to create parent object or update it
    "object"=>$follow,
    "show_name"=>"Название",
    "input_name"=>"name",
    "route_submit_text"=>$route["route_submit_text"],
// this maximum number of items which could be added to the list
    "max_length_create"=>4,


]);
