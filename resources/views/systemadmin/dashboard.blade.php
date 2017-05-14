<!DOCTYPE html>
<html lang="en">

    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible">
      <title>MTRH Leave System</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="" />
      <meta name="keywords" content="mtrh" />
      <meta name="author" content="InFed" />

        <!-- Facebook and Twitter integration -->
      <meta property="og:title" content=""/>
      <meta property="og:image" content=""/>
      <meta property="og:url" content=""/>
      <meta property="og:site_name" content=""/>
      <meta property="og:description" content=""/>
      <meta name="twitter:title" content="" />
      <meta name="twitter:image" content="" />
      <meta name="twitter:url" content="" />
      <meta name="twitter:card" content="" />

      <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      <link rel="shortcut icon" href="imondcorp.ico">

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

        <!-- @stack('stylesheets') -->

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                @include('systemadmin/includes/sidebar')

                @include('systemadmin/includes/topbar')

                @yield('main_container')

            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset("js/gentelella.min.js") }}"></script>

        <script>
          $(".delete").on("submit", function(){
            return confirm("You are about to delete a leave record, Continue?");
          });

        </script>

        <!-- @stack('scripts') -->

    </body>
</html>
