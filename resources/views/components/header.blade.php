<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button">
            {{--<svg class="icon icon-lg">
                <use xlink:href="{{ asset("@coreui/icons/sprites/free.svg#cil-menu") }}"></use>
            </svg>--}}
        </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
        <ul class="header-nav ms-3">
            <li class="nav-item dropdown">
                <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset("assets/img/avatars/8.jpg") }}" alt="user@email.com"></div></a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset("@coreui/icons/sprites/free.svg#cil-account-logout") }}"></use>
                            </svg>
                                 Logout </a>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</header>
