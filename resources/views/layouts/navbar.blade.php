<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="/" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white">Perpusda Kendal</h2>
    </a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
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
                    <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Histori Peminjaman
                    </button>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Histori Peminjaman</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-center">Berikut adalah histori peminjaman ruang yang anda buat.</p>
            @if ($historiPeminjamans->isNotEmpty())
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Ruang Dipinjam</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($historiPeminjamans as $peminjaman)
                                <tr>
                                    <td>{{ $peminjaman->ruang->name_ruang }}</td>
                                    <td>{{ $peminjaman->tanggal_peminjaman->format('d F Y') }}</td>
                                    <td>
                                        <span class="badge {{-- Gaya badge disederhanakan --}}
                                            @if ($peminjaman->status == 'diproses') bg-primary
                                            @elseif ($peminjaman->status == 'dipinjam') bg-success
                                            @elseif ($peminjaman->status == 'batal') bg-danger
                                            @else bg-secondary @endif">
                                            {{ $peminjaman->status }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-center py-3">Tidak ada histori peminjaman.</p>
            @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<!-- Navbar End -->