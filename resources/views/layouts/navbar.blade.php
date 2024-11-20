<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white">Perpusda Kendal</h2>
    </a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link">Home</a>
            <a href="about.html" class="nav-item nav-link">Pinjam Ruang</a>
            <a href="service.html" class="nav-item nav-link">Cek Jadwal</a>
            @guest
                @if (Route::has('login'))
                    <a href="{{route('login')}}" class="btn btn-primary py-md-4 px-md-4 me-3">MASUK</a>
                @endif
            @else
            <div class="nav-item drop dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu dropdown-menu-end fade-up m-0">
                    @if (Auth::user()->is_admin)
                        <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
                    @endif
                    <a href="price.html" class="dropdown-item">Histori Peminjaman</a>
                    <a href="feature.html" class="dropdown-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                         {{ __('Keluar') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @endguest
        </div>
    </div>
</nav>
<!-- Navbar End -->