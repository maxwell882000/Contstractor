@include("admin_panel.helper.form_enhanced.form_title_list", [
    "title"=>"Featured links",

    "key"=>"name",
    "list"=>$featured_links->link ?? "",
    "route_show"=>"admin.footer.featured_links_show",
    "route_delete"=>"admin.footer.featured_links_delete",

    "route_to_add_list"=>"admin.footer.featured_links_new_show",

    "object"=>$featured_links,
    "show_name"=>"Название",
    "input_name"=>"name",


    "max_length_create"=>6,
    "route_submit_text"=>"admin.footer.featured_links_show_list_input",

]);
