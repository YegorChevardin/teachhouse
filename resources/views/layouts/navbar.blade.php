<nav id="scroll-nav" class="navbar navbar-expand-xl fixed-top">
    <div class="container-fluid">
        <!-- // Navbars Logo // -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
        </a>
        <!-- Burger Menu Icon -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="material-icons">menu</i></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- / NavLinks / -->
            <ul class="nav navbar-nav ml-auto d-flex justify-content-center align-items-center">
                <li class="nav-item ml-1">
                    <a class="nav-link page-scroll" href="{{ route('home') }}">Главная</a>
                </li>
                <li class="nav-item ml-1">
                    <a class="nav-link page-scroll" href="{{ route('timetable') }}">Расписание</a>
                </li>
                <li class="nav-item ml-1">
                    <a class="nav-link page-scroll" href="{{ route('blog') }}">Блог</a>
                </li>
                <li class="nav-item ml-1">
                    <a class="nav-link page-scroll" href="{{ route('about') }}">О нас</a>
                </li>
                <li class="nav-item ml-1">
                    <a class="nav-link page-scroll" href="{{ route('contact') }}">Контакты</a>
                </li>
                @guest
                    <li class="nav-item ml-1">
                        <a class="nav-link page-scroll" href="{{ route('login') }}">Войти</a>
                    </li>
                    <li class="nav-item ml-1">
                        <a class="nav-link page-scroll" href="{{ route('register') }}">Зарегистрироваться</a>
                    </li>
                @else
                    @if(Auth::user()->hasRole('admin'))
                        <li class="nav-item ml-1">
                            <a class="nav-link page-scroll color-danger" href="{{ route('voyager.dashboard') }}" target="_blank">Админ панель</a>
                        </li>
                    @endif
                        <li class="nav-item ml-1">
                            <a class="nav-link page-scroll" href="{{ route('logout') }}">Выйти</a>
                        </li>
                        <li class="nav-item ml-1">
                            <a class="nav-link page-scroll" href="{{ route('profile') }}">{{ Auth::user()->name }}<img class="ml-1 border-radius-16" src="{{ Voyager::image(Auth::user()->avatar) }}" width="50px" alt="Твоя иконка"/></a>
                        </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
