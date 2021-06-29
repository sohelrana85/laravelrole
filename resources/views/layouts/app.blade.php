<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>{{ $title }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('materials')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('materials')}}/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('materials')}}/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('materials')}}/assets/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css">

    @stack('css')

    <!--right slidebar-->
    <link href="{{asset('materials')}}/css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('materials')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('materials')}}/css/style-responsive.css" rel="stylesheet" />

</head>

<body>

    <section id="container" class="">
        <!--header start-->
        @include('layouts.partials.header')
        <!--header end-->
        <!--sidebar start-->
        @include('layouts.partials.sidebar')
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!--mail inbox start-->
                @yield('content')
                <!--mail inbox end-->
            </section>
        </section>
        <!--main content end-->
        <!-- Right Slidebar start -->
        @include('layouts.partials.rightsidebar')
        <!-- Right Slidebar end -->

        <!--footer start-->
        @include('layouts.partials.footer')
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('materials')}}/js/jquery.js"></script>
    <script src="{{asset('materials')}}/js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="{{asset('materials')}}/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{asset('materials')}}/js/jquery.scrollTo.min.js"></script>
    <script src="{{asset('materials')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="{{asset('materials')}}/js/respond.min.js"></script>

    <!--right slidebar-->
    <script src="{{asset('materials')}}/js/slidebars.min.js"></script>

    <!-- BEGIN:File Upload Plugin JS files-->
    <script src="{{asset('materials')}}/assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="{{asset('materials')}}/assets/jquery-file-upload/js/vendor/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="{{asset('materials')}}/assets/jquery-file-upload/js/vendor/load-image.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="{{asset('materials')}}/assets/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="{{asset('materials')}}/assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="{{asset('materials')}}/assets/jquery-file-upload/js/jquery.fileupload.js"></script>
    <!-- The File Upload file processing plugin -->
    <script src="{{asset('materials')}}/assets/jquery-file-upload/js/jquery.fileupload-fp.js"></script>
    <!-- The File Upload user interface plugin -->
    <script src="{{asset('materials')}}/assets/jquery-file-upload/js/jquery.fileupload-ui.js"></script>

    @stack('js')

    <!--common script for all pages-->
    <script src="{{asset('materials')}}/js/common-scripts.js"></script>


</body>
</html>
