@inject('user','Illuminate\Auth\Guard')
<?php 
    $user_name=$user->user()->name; 
    $user_role=$user->user()->role['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('studentsportal.title') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @include('backend.partials.css')

    <style>
        .breadcrumb li a {
            color: #000;
        }

        .breadcrumb li a:hover {
            color: #505050;
        }
    </style>
    @yield('css')

</head>
<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">

        @include('backend.partials.nav')

        @include('backend.partials.sidebar')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h4>
                    @yield('breadcrumbs')
                </h4>
            </section>

            <section class="content panel-down">
                @yield('content')
            </section>

        </div>
        <!-- /.content-wrapper -->

        @include('backend.partials.footer')

    </div>
<!-- ./wrapper -->

@include('backend.partials.js')


@yield('js')

<!-- custom js functions -->
@yield('scripts')
<!-- ./custom js functions -->

</body>
</html>