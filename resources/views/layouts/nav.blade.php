      @php $exclude_routes = ['register', 'login', 'bucketlist'];  @endphp
      @if ((Route::currentRouteName() !== 'index'))
          <nav class="navbar navbar-inverse navbar-fixed-top">
      @else
          <nav class="navbar navbar-primary navbar-transparent navbar-fixed-top" color-on-scroll="200">
      @endif

        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="{{ route('index') }}" class="navbar-brand">
                    <img src="{{ asset('img/favicon.png') }}" width="30px" height="30px"/>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">

                    {{-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="blog-post.html">Blog post</a>
                            </li>
                        </ul>
                    </li> --}}
                    @guest
                    <li>
                        <a href="{{ route('register') }}">Register</a>bvrbr
                        <router-link :to="{ name: 'user', params: { userId: 123 }}">User rgrg</router-link>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                    @endguest
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
