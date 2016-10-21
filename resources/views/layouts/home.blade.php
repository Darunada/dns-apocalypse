<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        @include('layouts.partials.favicon')

        <title>DNS Apocalypse - @yield('title')</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        @section('extra-meta')
        @show


    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">DNS Apocalypse</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="content-body">
            <div class="header">
                <div class="container">
                    @yield('header-overlay')
                </div><!-- /.container -->
            </div>

            <div class="container">
                @yield('body')
            </div>
        </div>

        <footer id="footer" class="footer">
            <div>
                <small class="muted">Provided for your entertainment by
                    <a href="https://github.com/Darunada">Darunada</a> &
                    <a href="https://github.com/tailstheriveter">devTayls</a>
                </small>
                <br/>
                <small class="muted">Header image by
                    <a href="https://affinity.serif.com/forum/index.php?/topic/6324-the-roadrunner-show/">paolo.limncelli</a>
                </small>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
