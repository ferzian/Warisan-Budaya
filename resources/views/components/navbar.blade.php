<nav class="navbar">
    <a href="#" class="navbar-logo">Warisan<span>Budaya</span></a>

    <div class="navbar-nav">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/posts">Blog</a></li>
            <li><a href="/about">Tentang Kami</a></li>
            <li>
                <a href="#informasi" id="chevron-down">Kategori<i data-feather="chevron-down"></i>
                    <ul class="dropdown">
                        <li><a href="/categories/Bangunan">Bangunan</a></li>
                        <li><a href="/categories/Museum">Museum</a></li>
                    </ul>
                </a>
            </li>
        </ul>
    </div>
    @auth
    @else
        <div class="navbar-extra">
            {{-- <a href="#" id="search"><i data-feather="search"></i></a> --}}
            <a href="/index"><button>Login</button></a>
            <a href="#" id="humburger-menu"><i data-feather="menu"></i></a>
        </div>
    @endauth
</nav>
