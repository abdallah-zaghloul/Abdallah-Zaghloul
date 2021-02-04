
<nav class="navbar navbar-expand-lg navbar-dark btn-dark border-bottom navbar-laravel">
    <!-- Left Side Of Navbar -->

    <div class="container">
        <button class="btn btn-light text-left" id="menu-toggle"style="font-family: 'Asmaa'" autofocus>
            <
            قائمتى
        </button>
        &nbsp;
    <a class="navbar-brand" style="color: white" href="{{ route('admin.home') }}">
            {{ config('app.name', 'Abdallah-Zaghloul') }} {{ ucfirst(config('multiauth.prefix')) }}
        </a>
        <button class="navbar-toggler  text-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon text-center"></span>
        </button>
    </div>


    <!-- End Of Left Side  -->

    <!-- Right Side Of Navbar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav text-right" style="color: white">
            <!-- Authentication Links -->
            @guest('admin')
                <li class="nav-item text-right" style="color: white">
                    <a class="nav-link text-right" href="{{route('admin.login')}}" style="color: white">
                        {{ ucfirst(config('multiauth.prefix'))}} Login</a>
                </li>
            @else
                <li class="nav-item dropdown text-right" style="color: white">
                    <a id="navbarDropdown text-right" class="nav-link dropdown-toggle" href="#" role="button"
                       style="color: white"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ auth('admin')->user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @admin('super')
                        <a class="dropdown-item text-right" href="{{ route('admin.show') }}">{{ucfirst(config('multiauth.prefix')) }}</a>
                        @permitToParent('Role')
                        <a class="dropdown-item text-right" href="{{ route('admin.roles') }}">Roles</a>
                        @endpermitToParent
                        @endadmin
                        <a class="dropdown-item text-right" href="{{ route('admin.password.change') }}">Change Password</a>
                        <a class="dropdown-item text-right" href="/admin/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>

    <!-- End Of Right Side  -->

</nav>
