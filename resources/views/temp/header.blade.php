    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <a href="{{ url('/') }}"><img src="{{ url('assets/img/logo_prama.png') }}" alt="logo" /></a>
        </div>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="{{ request()->is('tentang_kami') ? 'active' : '' }}">
                    <a href="{{ url('/tentang_kami/') }}">Tentang Kami</a>
                </li>
                <li class="{{ request()->is('karir') ? 'active' : '' }}">
                    <a href="{{ url('/karir/') }}">Karir</a>
                </li>
                <li class="{{ request()->is('berita') ? 'active' : '' }}">
                    <a href="{{ url('/berita/') }}">Berita</a>
                </li>
                <li class="drop-down"><a href="">Bahasa</a>
                    <ul>
                        <li><a href="">Indonesia</a></li>
                        <li><a href="">Inggris</a></li>
                    </ul>
                </li>
                <div class="loginbtn"><a href="{{ url('/pesan/') }}"><button class="login_button">Pesan</button></a>
                </div>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
