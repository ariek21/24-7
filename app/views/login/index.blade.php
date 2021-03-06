<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="/admin/admin/public/css/normalize.css">
        <link rel="stylesheet" href="/admin/admin/public/css/bootstrap.min.css">
        <link rel="stylesheet" href="/admin/admin/public/css/main.css">
    </head>
    <body class="login-page">

        <div class="site">
            <div class="container">
                <div class="sidebar">
                    @yield('sidebar')
                </div>
                <div class="content">
                     <div class="login">
                        <div class="welcome">
                          <h3>{{trans('app.login')}}</h3>
                                {{Form::open(array('method' => 'post', 'role'=>'form'))}}

                                    <div class="form-group">
                                    @if ($errors)
                                      <div class="alert alert-danger">
                                        <div>{{ $errors->first('username') }}</div>
                                      <div>
                                        {{ $errors->first('password') }}
                                      </div>
                                      </div>
                                    @endif
                                        {{ Form::text('username', '', array('class'=>'form-control', 'placeholder' => trans('app.username')))}}
                                    </div>
                                    <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="{{trans('app.password')}}">
                                    </div>
                                    <div class="form-group">
                                    <input type="submit" value="{{trans('app.login')}}" class="btn btn-default">
                                    </div>
                                {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
