<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css_admin -->
    <link rel="stylesheet" href="{{asset("vendors/feather/feather.css")}}">
    <link rel="stylesheet" href="{{asset("vendors/ti-icons/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{asset("vendors/css/vendor.bundle.base.css")}}">
    <!-- endinject -->
    <!-- Plugin css_admin for this page -->
    <link rel="stylesheet" href="{{asset("vendors/datatables.net-bs4/dataTables.bootstrap4.css")}}">
    <link rel="stylesheet" href="{{asset("vendors/ti-icons/css/themify-icons.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("js_admin/select.dataTables.min.css")}}">
    <!-- End plugin css_admin for this page -->
    <!-- inject:css_admin -->
    <link rel="stylesheet" href="{{asset("css_admin/vertical-layout-light/style.css")}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset("images_admin/favicon.png")}}"/>
</head>
<body>

<div class="container-scroller">
    @include("admin_panel.partials._navbar")

    <div class="container-fluid page-body-wrapper">
    @include("admin_panel.partials._settings-panel")
    @include("admin_panel.partials._sidebar")


    @yield("container")
    <!-- partial -->
    </div>
@include("admin_panel.partials._footer")
    <!-- main-panel ends -->
</div>
<!-- plugins:js_admin -->
<script src="{{asset("vendors/js/vendor.bundle.base.js")}}"></script>
<!-- endinject -->
<!-- Plugin js_admin for this page -->
<script src="{{asset("vendors/chart.js/Chart.min.js")}}"></script>
<script src="{{asset("vendors/datatables.net/jquery.dataTables.js")}}"></script>
<script src="{{asset("vendors/datatables.net-bs4/dataTables.bootstrap4.js")}}"></script>
<script src="{{asset("js_admin/dataTables.select.min.js")}}"></script>

<!-- End plugin js_admin for this page -->
<!-- inject:js_admin -->
<script src="{{asset("js_admin/off-canvas.js")}}"></script>
<script src="{{asset("js_admin/hoverable-collapse.js")}}"></script>
<script src="{{asset("js_admin/template.js")}}"></script>
<script src="{{asset("js_admin/settings.js")}}"></script>
<script src="{{asset("js_admin/todolist.js")}}"></script>
<!-- endinject -->
<!-- Custom js_admin for this page-->
<script src="{{asset("js_admin/dashboard.js")}}"></script>
<script src="{{asset("js_admin/Chart.roundedBarCharts.js")}}"></script>
<!-- End custom js_admin for this page-->
<!-- Plugin js_admin for this page -->
<script src="{{asset("vendors/typeahead.js/typeahead.bundle.min.js")}}"></script>
<script src="{{asset("vendors/select2/select2.min.js")}}"></script>
<script src="{{asset("js/jquery.js")}}"></script>

@yield("script")
<script>
    function observe(name){
        $(`#${name}-upload`).click(function (){
            $(`#${name}`).trigger("click");
            $(`#${name}`).on("change",function (){
                let parent = $(this).parent();
                parent.find("#show_text_when_uploaded_" + name).val("Загружено");
            });
        });
    }
    observe("image");
    observe("icon");
    observe("common_icon");

</script>
<!-- End plugin js_admin for this page -->
</body>

</html>
