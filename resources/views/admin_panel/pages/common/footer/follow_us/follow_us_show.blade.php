@include("admin_panel.helper.form_enhanced.form_title_list", [
    "title"=>"Follow Us",
// This will be send to loop
    "key"=>"name",
    "list"=>$follow->iconHtml ?? "",
    "route_show"=>"admin.footer.follow_show",
    "route_delete"=>"admin.footer.follow_delete",
// this for a button to create new items
    "route_to_add_list"=>"admin.footer.follow_new_show",
// This to create parent object or update it
    "object"=>$follow,
    "show_name"=>"Название",
    "input_name"=>"name",
    "route_submit_text"=>"admin.footer.follow_show_list_input",
// this maximum number of items which could be added to the list
    "max_length_create"=>4,


]);
