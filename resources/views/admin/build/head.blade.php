<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{url('favicon.ico')}}">

    <title>{{$title}}</title>

    <!-- Bootstrap -->
    <link href="{{url('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{url('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{url('admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{url('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{url('admin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- Animate.css -->
    <link href="{{url('admin/vendors/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="{{url('admin/vendors/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/vendors/fullcalendar/dist/fullcalendar.print.css')}}" rel="stylesheet" media="print">
    <!-- Datatables -->
    <link href="{{url('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{url('admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-datetimepicker -->
    <link href="{{url('admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="{{url('admin/vendors/normalize-css/normalize.css')}}" rel="stylesheet">
    <link href="{{url('admin/vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{url('admin/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="{{url('admin/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <!-- Cropper -->
    <link href="{{url('admin/vendors/cropper/dist/cropper.min.css')}}" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="{{url('admin/vendors/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
	<link href="{{url('admin/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
	<!-- Select2 -->
	<link href="{{url('admin/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
	<!-- Switchery -->
	<link href="{{url('admin/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
	<!-- starrr -->
	<link href="{{url('admin/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{url('admin/vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet">
    <link href="{{url('admin/vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
    <link href="{{url('admin/vendors/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('assets\css\jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets\css\searchPanes.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets\css\select.dataTables.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('admin/build/css/custom.min.css')}}" rel="stylesheet">

    <!-- Personalizando o estilo do painel de filtros do datatables -->
    <style>
        .dtsp-panesContainer {
            width:390px;
            margin-bottom: 3rem !important;
        }

        div.dtsp-panesContainer div.dtsp-searchPanes div.dtsp-searchPane {
            margin-top:0px !important;
        }
        div.dtsp-panesContainer .dataTables_scrollBody {
            max-height:100px;
            /* overflow: hidden !important; */
            /* height: 40px !important; */
        }

        div.dtsp-panesContainer div.dataTables_wrapper div.dataTables_scrollBody div.dtsp-nameCont span.dtsp-name p {
            margin:0px !important;
        }

        div.dtsp-panesContainer div.dtsp-searchPanes div.dtsp-searchPane div.dataTables_wrapper {
            padding:0px !important;
        }

        div.dtsp-panesContainer .dtsp-titleRow button {
            margin-bottom: 0px !important;
        }

        div.dtsp-topRow, div.dtsp-titleRow {
            display: none;
        }

        .filtro {
            cursor: pointer;
            width:fit-content;
            border: 1px solid #ccc;
            border-radius: 3px;
            padding: 8px;
        }

        .filtro-subtitle {
            margin-left: 1.2rem;
            margin-top: -11px;
            margin-bottom: 0px;
        }

        .filtro:hover, .filtro.active {
        color: white;
        background-color:#73879c;
        }

        .filtro i {
            font-size: 20px;
            vertical-align: middle;
            transition: 0.5s;
            transform: rotate(0.0turn);
        }
        .filtro.active i{
            transform: rotate(0.5turn);
        }

    </style>


</head>
