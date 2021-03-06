
    <div class="container">
        <div class="row">
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url("/user/{$user->id}") }}">
                            Portfolio
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                    <!-- <li class="nav-item">
                                        <a href="#home" class="nav-link">Home</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="#home" class="nav-link">About Me</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="#projects" class="nav-link"> Projects</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="#technologies" class="nav-link"> Technologies</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="#contact" class="nav-link"> Contact Me</a>
                                    </li>
                                @guest                                   
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>