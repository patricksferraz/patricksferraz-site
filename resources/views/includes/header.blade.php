<div class="navbar-fixed">
    <nav id="nav-principal" class="z-depth-0">
        <div class="container">
            <div class="nav-wrapper">
                <a href="{{ url('/', config('app.locale')) }}" class="brand-logo grey-text text-darken-2">
                    <img src="{{ asset('img/logo.png') }}" alt="patricksferraz"> <span id="n-logo">patrick<span class="deep-purple-text text-accent-2">sferraz</span></span>
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger deep-purple-text text-accent-2"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href=""><i class="material-icons">apps</i></a></li>
                    {{-- <li><a href=""><i class="material-icons">notifications</i></a></li>
                    <li><a class="btn-floating" href=""><i class="material-icons">person</i></a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
    <a href="{{ url('/', config('app.locale')) }}" class="brand-logo">
        <img class="center-block" src="{{ asset('img/logo.png') }}" alt="patricksferraz">
    </a>
    <li><a href=""><i class="material-icons">apps</i>
        @lang('buttons.menu')
    </a></li>
    {{-- <li><a href=""><i class="material-icons">notifications</i>
        @lang('buttons.notifications')
    </a></li> --}}
    {{-- TODO: Adicionar nome de usuário has login --}}
    {{-- <li><a href=""><i class="material-icons">person</i></a> name_user</li> --}}
</ul>
