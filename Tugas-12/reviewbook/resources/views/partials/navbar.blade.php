<style>
    .navmenu {
        padding: 15px;
        font-size: 18px
    }
    .navmenu a.active {
        color: #00b56a !important;
        font-weight: bold;
        text-decoration: underline;
    }

    .navmenu a.inactive {
        color: #333;
        font-weight: normal;
        text-decoration: none;
    }
</style>
<header id="header" class="header d-flex align-items-center sticky-top" <div
    class="container position-relative d-flex align-items-center">

    <a href="/" class="logo d-flex align-items-center me-auto px-2">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename ">RevBooks</h1><span>.</span>
    </a>

    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="/" class="{{ Request::is('/') ? 'active' : 'inactive' }}">Home</a></li>
            <li><a href="/book" class="{{ Request::is('book*') ? 'active' : 'inactive' }}">Book</a></li>
            <li><a href="/genre" class="{{ Request::is('genre*') ? 'active' : 'inactive' }}">Genre</a></li>
            @guest
                <li><a href="/login" class="{{ Request::is('login') ? 'active' : 'inactive' }}">Login</a></li>
                <li><a href="/register" class="{{ Request::is('register') ? 'active' : 'inactive' }}">Register</a></li>
            @endguest
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <div class="d-flex ">
                        <li class="dropdown cursor-pointer"><i
                                class="fa-solid fa-user ">&nbsp;&nbsp;{{ Auth::user()->name }}</i>
                            <ul>
                                <li><a href="/profile" class="">Profile</a></li>
                                <li><button class="btn btn-danger">Logout</button></li>
                            </ul>
                        </li>
                    </div>
                </form>
            @endauth
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    </div>
</header>
