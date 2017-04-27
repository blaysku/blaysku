<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title or 'Laravel' }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {!! Html::script(asset('js/pace.js')) !!}
    {!! Html::style(asset('css/pace.css')) !!}
    <!-- Bootstrap 3.3.6 -->
    {!! Html::style(mix('css/app.css')) !!}
    <!-- Theme style -->
    {!! Html::style(mix('css/adminlte.css')) !!}
    <script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
-->
<body class="hold-transition {!! $skin or 'skin-purple' !!} sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        @include('admin.block.header')
        <!-- Left side column. contains the logo and sidebar -->
        @include('admin.block.left-sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    {{ $pageHeader or 'Page Header' }}
                    <small>{{ $pageDescription or 'Sample description' }}</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-dashboard"></i> Level</a>
                    </li>
                    <li class="active">Here</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        @include('admin.block.footer')
        <!-- Control Sidebar -->
        @include('admin.block.right-sidebar')
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED JS SCRIPTS -->
    {!! Html::script(mix('js/app.js')) !!}
    {!! Html::script(mix('js/adminlte.js')) !!}
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
