@php
$isHome = request()->routeIs('home');
@endphp

<nav class="d-flex justify-content-between {{ $isHome ? 'home-nav' : 'other-nav' }}">

    <!-- LOGO -->
    <div class="logo">

        <i class="fas fa-shield-alt"></i>

        <span>CYBER FRAUD AWARENESS</span>

    </div>


    <!-- NAV LINKS -->
    <ul class="d-flex list-unstyled gap-2 align-items-center">


        <!-- HOME -->
        <li>

            <a href="{{ route('home') }}" class="button">

                HOME

            </a>

        </li>


        <!-- ONLY LOGGED IN USERS -->
        @auth

            <!-- ABOUT -->
            <li>

                <a href="{{ route('about') }}" class="button">

                    ABOUT

                </a>

            </li>


            <!-- CHECK STATUS -->
            <li>

                <a href="{{ route('check-status') }}" class="button">

                    CHECK STATUS

                </a>

            </li>


            <!-- REPORT -->
            <li>

                <a href="{{ route('report') }}" class="button">

                    REPORT

                </a>

            </li>


            <!-- CONTACT -->
            <li>

                <a href="{{ route('contact') }}" class="button">

                    CONTACT

                </a>

            </li>


            <!-- ADMIN BUTTON -->
            @if(auth()->user()->role === 'admin')

                <li>

                    <a href="{{ route('admin.dashboard') }}" class="button">

                        ADMIN

                    </a>

                </li>

            @endif

        @endauth



        <!-- USER DROPDOWN -->
        <li class="nav-item dropdown">


            <!-- GUEST -->
            @guest

                <a class="button dropdown-toggle"
                   href="#"
                   id="guestMenu"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">

                    GET STARTED

                </a>

                <ul class="dropdown-menu dropdown-menu-end">

                    <li>

                        <a class="dropdown-item"
                           href="#">

                            Sign In / Sign Up

                        </a>

                    </li>

                </ul>

            @endguest



            <!-- AUTH USER -->
            @auth

                <a class="button dropdown-toggle"
                   href="#"
                   id="userMenu"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">

                    {{ auth()->user()->name }}

                </a>

                <ul class="dropdown-menu dropdown-menu-end">


                    <!-- DASHBOARD -->
                    <li>

                        <a class="dropdown-item"
                           href="{{ route('dashboard') }}">

                            Dashboard

                        </a>

                    </li>


                    <li>

                        <hr class="dropdown-divider">

                    </li>


                    <!-- LOGOUT -->
                    <li>

                        <form action="{{ route('logout') }}"
                              method="POST">

                            @csrf

                            <button type="submit"
                                    class="dropdown-item">

                                Logout

                            </button>

                        </form>

                    </li>

                </ul>

            @endauth

        </li>

    </ul>

</nav>