<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')Applied Reaserch Application | Cyber Security Center | Developed by Appsolic Lab</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('AdminSD/assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('AdminSD/assets/css/animate.min.css') }}" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('AdminSD/assets/css/paper-dashboard.css') }}" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('AdminSD/assets/css/demo.css') }}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('AdminSD/assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminSD/assets/css/style.css') }}" rel="stylesheet">

</head>

<body onload="myLoader()">
    
    <div id="preloader"></div>  

    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Cyber Research Lab
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.html">
                            <i class="ti-panel"></i>
                            <p>My Feed</p>
                        </a>
                    </li>
                    <li data-panelId="panel1" class="dropdown-btn">
                        <a href="table.html">
                            <i class="ti-view-list-alt"></i>
                            <p>Training<b class="caret"></b></p>
                        </a>
                        <ul id="panel1" class="dropdown-ul">
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                        </ul>
                    </li>
                    <li data-panelId="panel2" class="dropdown-btn">
                        <a href="typography.html">
                            <i class="ti-layout-slider"></i>
                            <p>Workshop <b class="caret"></b></p>
                        </a>
                        <ul id="panel2" class="dropdown-ul">
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                        </ul>
                    </li>
                    <li data-panelId="panel3" class="dropdown-btn">
                        <a href="typography.html">
                            <i class="ti-blackboard"></i>
                            <p>Seminar <b class="caret"></b></p>
                        </a>
                        <ul id="panel3" class="dropdown-ul">
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                            <li><a href="#"><span>T</span><span>Table 1</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="ti-light-bulb"></i>
                            <p>Contest</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="ti-user"></i>
                            <p>My Profile</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="maps.html">
                            <i class="ti-map"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="notifications.html">
                            <i class="ti-bell"></i>
                            <p>Notifications</p>
                        </a>
                    </li> -->
                    <li class="">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="ti-export"></i>
                            <p style="text-transform: capitalize;">Sign Out</p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">@yield('pagetitle')</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p>Stats</p>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <i class="ti-settings"></i>
                                    <p>Settings</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">

                    






@yield('content')




                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>

                            <li>
                                <a href="#">
                                    Cyber Security Center
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Daffodil
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i>
                        by <a href="http://www.appsoliclab.com">Appsolic Lab</a>
                    </div>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="{{ asset('AdminSD/assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminSD/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('AdminSD/assets/js/bootstrap-checkbox-radio.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('AdminSD/assets/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('AdminSD/assets/js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('AdminSD/assets/js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('AdminSD/assets/js/demo.js') }}"></script>
<script src="{{ asset('AdminSD/assets/js/main.js') }}"></script>

<script type="text/javascript">
    // $(document).ready(function () {

    //     demo.initChartist();

    //     $.notify({
    //         icon: 'ti-gift',
    //         message: "Welcome to <b>Cyber Research Lab</b> - a beautiful connectivity platform for researcher."

    //     }, {
    //             type: 'success',
    //             timer: 4000
    //         });

    // });
</script>
<script>
        
        var preloader = document.getElementById("preloader");

        function myLoader(){
            preloader.style.display = 'none';
            // without fixed time
        };


        // function myLoader(){

        //     var time = 300;
        //     setTimeout(function() {

        //          preloader.style.display = 'none';
                 
        //     },time);
            
        // };

    </script>

</html>