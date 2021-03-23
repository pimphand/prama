<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{ asset('admin') }}/assets/images/users/profile.png" alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5>Markarn Doe</h5>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <a href="pages-login.html" class="" data-toggle="tooltip" title="Logout"><i
                        class="mdi mdi-power"></i></a>
                <div class="dropdown-menu animated flipInY">
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <!-- text-->
                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <!-- text-->
                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                    <!-- text-->
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-small-cap">Admin</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="mdi mdi-bullseye"></i><span class="hide-menu">Home</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('home.gambar') }}">Gambar Slider</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="mdi mdi-gauge"></i><span class="hide-menu">Karir</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('lowongan') }}">Data Lowongan</a></li>
                        <li><a href="{{ route('admin.pelamar') }}">Data Pelamar</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="mdi mdi-newspaper"></i><span class="hide-menu">Berita</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('berita') }}">Data Berita</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
