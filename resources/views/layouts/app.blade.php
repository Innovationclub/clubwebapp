<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
</head>
<body class="homepage is-preload">
    <div id="app">
        <div id="page-wrapper">
        
                    <!-- Header -->
                <div id="header">
                        
                    <!-- Inner -->
                        
                            <header>
                            <h1><a href="{{ url('/') }}" id="logo">INNOVATION CLUB</a></h1>
                                <hr />
                                <p>KARATINA UNIVERSITY </p>
                            </header>
                            
                        </div>
                        
                       
               
                        <nav id="nav">
                            <ul>
                                @if (Auth::guest())
                                <li><a href="#">LOGIN</a>
                                <ul>
                                                <li><a href="{{ route('voyager.login') }}">LOG IN</a></li>
                                                <li><a href="register.html">REGISTER</a></li>
                                                
                                            </ul>
                                </li>
                                @else
                                <li><a href="{{ route('voyager.logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a></li>
                                        <form id="logout-form" action="{{ route('voyager.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
   
                                @endif
                                <li>
                                    <a href="#">COMMUNITIES</a>
                                    <ul>
                                        <li><a href="security.html">CYBER SECURITY</a></li>
                                        <li><a href="ai.html">AI AND IOT COMMUNITY</a>
                                        <ul>
                                                <li><a href="#">Artifitial Intelligence</a></li>
                                                <li><a href="#">Internet Of Things</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="linux.html">LINUX COMMUNITY</a></li>
                                        <li>
                                            <a href="future.html">FUTURE COMMUNITY</a>
                                            <ul>
                                                <li><a href="#">multimedia production</a></li>
                                                <li><a href="#">Big data</a></li>
                                                <li><a href="#">clound computing</a></li>
                                                <li><a href="#">emerging treds on ICT</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li><a href="events.html">EVENTS</a></li>
                                <li><a href="projects.html">PROJECTS</a></li>
                                <li><a href="no-sidebar.html">RESOURCES</a></li>
                                <li><a href="no-sidebar.html">BLOGS</a></li>
                                <li><a href="no-sidebar.html">FAQs</a></li>
                                <li><a href="no-sidebar.html">CONTACT US</a></li>
                                <li><a href="no-sidebar.html">ABOUT US</a></li>
                            </ul>
                        </nav>
                        

                </div>        
        @yield('content')
    </div>

    <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.dropotron/1.4.3/jquery.dropotron.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollex/0.2.1/jquery.scrollex.js" integrity="sha256-YRrJ9+c/G7B08a+23qVgtEIj8xQd3tSUwkdkaVF9vUc=" crossorigin="anonymous"></script>
              <script type="text/javascript" src="{{ voyager_asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>