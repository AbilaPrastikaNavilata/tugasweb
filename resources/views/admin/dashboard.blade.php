@extends('layouts.admin')

@section('content')
        <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Welcome {{(Auth::user()->name)}} 🎉</h5>
                        <p class="mb-4">
                          Semangat sayangku!!!! :V
                        </p>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img
                          src="../assets/img/illustrations/man-with-laptop-light.png"
                          height="140"
                          alt="View Badge User"
                          data-app-dark-img="illustrations/man-with-laptop-dark.png"
                          data-app-light-img="illustrations/man-with-laptop-light.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/chart-success.png"
                              alt="chart success"
                              class="rounded"
                            />
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Pengguna</span>
                        <h3 class="card-title mb-1">{{$jumlahPengguna}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/wallet-info.png"
                              alt="Credit Card"
                              class="rounded"
                            />
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Peminjaman</span>
                        <h3 class="card-title mb-1">{{$jumlahPeminjaman}}</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total Revenue -->
              <div class="col-12 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="row row-bordered g-0">
                      <!-- Hoverable Table rows -->
                      <div class="card">
                          <h5 class="card-header">Peminjaman Ruang</h5>
                          <div class="table-responsive text-nowrap">
                          <table class="table table-hover">
                              <thead>
                              <tr>
                                  <th>Nama Peminjam</th>
                                  <th>Ruang Dipinjam</th>
                                  <th>Tanggal Peminjaman</th>
                                  <th>Surat Peminjaman</th>
                                  <th>Status</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                @if ($peminjamans->isNotEmpty())
                                    @foreach ($peminjamans as $peminjaman)
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $peminjaman->user->name }}</strong></td>
                                            <td>{{ $peminjaman->ruang->name_ruang }}</td>
                                            <td>{{ $peminjaman->tanggal_peminjaman->format('d F Y') }}</td>
                                            <td><a href="{{ Storage::url($peminjaman->surat_peminjaman) }}" target="_blank">Surat Peminjaman</a></td>
                                            <td>
                                                <span class="badge me-1 text-uppercase
                                                    {{ strtolower($peminjaman->status) == 'peminjaman diproses' ? 'bg-label-primary' :
                                                       (strtolower($peminjaman->status) == 'peminjaman diterima' ? 'bg-label-success' :
                                                       (strtolower($peminjaman->status) == 'peminjaman selesai' ? 'bg-label-warning' :
                                                       (strtolower($peminjaman->status) == 'peminjaman ditolak' ? 'bg-label-danger' : 'bg-label-secondary'))) }}">
                                                    {{ $peminjaman->status }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <form action="{{ route('peminjaman.updateStatus', $peminjaman->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="peminjaman diterima">
                                                            <button type="submit" class="dropdown-item"><span class="badge bg-label-success me-1">Peminjaman Diterima</span></button>
                                                        </form>
                                                        <form action="{{ route('peminjaman.updateStatus', $peminjaman->id) }}" method="POST">
                                                          @csrf
                                                          @method('PUT')
                                                          <input type="hidden" name="status" value="peminjaman ditolak">
                                                          <button type="submit" class="dropdown-item"><span class="badge bg-label-danger me-1">Peminjaman Ditolak</span></button>
                                                        </form>
                                                        <form action="{{ route('peminjaman.updateStatus', $peminjaman->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="peminjaman selesai">
                                                            <button type="submit" class="dropdown-item"><span class="badge bg-label-warning me-1">Peminjaman Selesai</span></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center py-5">
                                            Tidak ada peminjaman yang harus diproses. Untuk peminjaman yang sudah berlalu, silakan cek di menu history peminjaman.
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                          </table>
                          </div>
                      </div>
                      <!--/ Hoverable Table rows -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / Content -->
  @endsection