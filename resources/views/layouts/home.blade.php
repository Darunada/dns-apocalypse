<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="How much money was lost during the DynDNS attack?  A LOT.">
        @include('layouts.partials.favicon')

        <title>DNS Apocalypse</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        @section('extra-meta')
            <meta property="og:title" content="DNS Apocalypse" />
            <meta property="og:url" content="https://www.dnsapocalypse.com" />
            <meta property="og:type" content="website" />
            <meta property="og:site_name" content="DNS Apocalypse" />
            <meta property="og:description" content="How much money was lost during the DynDNS attack?  A LOT." />
            <meta property="og:image" content="{{ asset(elixir('build/images/thats-all.jpg', 'build')) }}" />
            <meta property="fb:admins" content="604408130" />
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:title" content="DNS Apocalypse" />
            <meta name="twitter:url" content="https://www.dnsapocalypse.com" />
            <meta name="twitter:image" content="{{ asset(elixir('build/images/thats-all.jpg', 'build')) }}" />

        @show


    </head>
    <body>
        <div id="fb-root"></div>

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

                <h3>Smash that like button</h3>
                <p>
                <div class="fb-like" data-href="https://www.dnsapocalypse.com" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                </p>
                <p>
                <a class="twitter-share-button"
                    href="https://twitter.com/intent/tweet?text=How%20much%20money%20was%20lost%20during%20the%20DynDNS%20DDoS%20attack%3F%20A%20LOT."
                    data-size="large"
                    data-hashtags="dyndns,ddos,ddosattack,dnsapocalypse">
                    Tweet</a>
                </p>
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
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-86137535-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
