<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.icon-large.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    </head>
    <body id="{{ $name }}-page">


      </div>
	    <div class="site">
		    <div class="container row">
		        <div class="sidebar col-lg-2">
              <span class="greeting">Welcome
                @if (Auth::check())
                {{Auth::user()->username}}!
                @endif</span>

                <nav class="">
                    <ul class="nav nav-pills">

                        <li class="{{ $name == 'dashboard' ? 'active' : '' }}">
                          <a href="{{URL::to('dashboard')}}" class="">
                              <i class="glyphicon glyphicon-th"></i>
                              {{trans('app.dashboard')}}
                            </a>
                        </li>

                        <li class="{{ $name == 'tasks' ? 'active' : '' }}">
                            <a href="{{URL::to('dashboard/tasks')}}" class="">
                              <i class="glyphicon glyphicon-tasks"></i>
                              {{trans('app.tasks')}}
                            </a>
                        </li>
                        @if (User::isSuperAdmin())
                        <li class="{{ $name == 'clients' ? 'active' : '' }}">
                          <a href="{{URL::to('dashboard/clients')}}" class="">
                              <i class="glyphicon glyphicon-th"></i>
                              {{trans('app.createNewUser')}}
                            </a>
                        </li>
                        @endif
                        <li class="{{ $name == 'reports' ? 'active' : '' }}">
                            <a href="{{URL::to('dashboard/reports')}}" class="">
                              <i class="glyphicon glyphicon-list-alt"></i>
                              {{trans('app.reports')}}
                            </a>
                        <li class="{{ $name == 'my-account' ? 'active' : '' }}">
                            <a href="{{URL::to('dashboard/accounts')}}" class="">
                              <i class="glyphicon glyphicon-user"></i>
                              {{trans('app.my_account')}}
                            </a>
                        </li>
                        <li class="{{ $name == 'my-account' ? 'active' : '' }}">
                            <a href="{{URL::to('logout')}}" class="">
                              <i class="glyphicon glyphicon-user"></i>
                              {{trans('app.log_out')}}
                            </a>
                        </li>
                    </ul>
                </nav>
		            @yield('sidebar')
		        </div>
		        <div class="content col-lg-10">
		            @yield('content')
		        </div>
			</div>
		</div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script>
            var app = {
                name: '{{trans('app.name')}}',
                email: '{{trans('app.email')}}',
                phone: '{{trans('app.phone')}}',
                desc: '{{trans('app.desc')}}'
            };

            $(document).ready(function(){
                $('select').selectpicker();

                $('#addContactButton').click(function(){
                    var buff;
                    buff = '<div class="form-group row">';
                        buff += '<div class="col-lg-4">';
                            buff += '<label for="">' + app.name + '</label>';
                            buff += '<input type="text" class="form-control" name="contact-name">';
                        buff += '</div>';

                        buff += '<div class="col-lg-4">';
                            buff += '<label for="">' + app.email + '</label>';
                            buff += '<input type="text" class="form-control" name="contact-email">';
                        buff += '</div>';

                        buff += '<div class="col-lg-4">';
                            buff += '<label for="">' + app.phone + '</label>';
                            buff += '<input type="text" class="form-control" name="contact-phone">';
                        buff += '</div>';
                    buff += '</div>';
                    buff += '<div class="form-group row">';

                        buff += '<div class="col-lg-12">';
                            buff += '<label for="">' + app.desc + '</label>';
                            buff += '<input type="text" class="form-control" name="contact-desc">';
                        buff += '</div>';
                    buff += '</div>';

                    $('#contacts-fields').append(buff);

                    return false;
                });
            });
        </script>

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