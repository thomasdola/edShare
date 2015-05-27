<div id="masthead" class="navbar navbar-static-top swatch-white navbar-sticky" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{ action('HomeController@index') }}" class="navbar-brand">
                        InsightFactory
                    </a>
                </div>
                <nav class="collapse navbar-collapse main-navbar" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="menu-item-object-oxy_mega_menu ">
                            <a href="{{action('HomeController@index')}}">Home</a>
                        </li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li>
                            <a href="{{action('HomeController@about')}}">About Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>