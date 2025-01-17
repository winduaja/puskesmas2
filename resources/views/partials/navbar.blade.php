<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="#">Puskesmas Jatinom</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'beranda' ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'tentang' ? 'active' : '' }}" href="/tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'berita' ? 'active' : '' }}" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>
            <ul class = "navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard">
                                <i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
                                <hr class="dropdown-divider">
                            </li>
                                <form action = "/logout" method="post">
                                    @csrf
                                    <button type="submit"class="dropdown-item" href="#"><i class="bi bi-box-arrow-right">
                                </i>logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class = "nav-item">
                        <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}
                    "><i
                                class="bi bi-box-arrow-in-right"></i>Login </a>
                    @endauth
            </ul>

        </div>
    </div>
</nav>
