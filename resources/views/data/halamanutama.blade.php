@extends('master')
@section('title')
    Halaman Utama
@endsection

@section('konten')
<div class="row">
    <!-- [ sample-page ] start -->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Ai - Doorsmeer</h5>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Melihat halaman</h6>
                    <h4 class="mb-3">4,42,236 <span class="badge bg-light-primary border border-primary"><i
                          class="ti ti-trending-up"></i> 59.3%</span></h4>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Pengguna</h6>
                    <h4 class="mb-3">78,250 <span class="badge bg-light-success border border-success"><i
                          class="ti ti-trending-up"></i> 70.5%</span></h4>

                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
                    <h4 class="mb-3">18,800 <span class="badge bg-light-warning border border-warning"><i
                          class="ti ti-trending-down"></i> 27.4%</span></h4>

                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Keuntungan</h6>
                    <h4 class="mb-3">Rp 1.000.000 <span class="badge bg-light-danger border border-danger"><i
                          class="ti ti-trending-down"></i> 27.4%</span></h4>

                  </div>
                </div>
              </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-8">
              <h5 class="mb-3">Table Konsumen</h5>
              <div class="card tbl-card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-borderless mb-0">
                      <thead>
                        <tr>
                          <th>No Order.</th>
                          <th>Nama Kendaraan</th>
                          <th>Total Order</th>
                          <th>Status</th>
                          <th class="text-end">Total Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#" class="text-muted">84564564</a></td>
                          <td>Suprax</td>
                          <td>40</td>
                          <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                          <td class="text-end">Rp400.000</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="text-muted">84564564</a></td>
                          <td>Scoopy</td>
                          <td>300</td>
                          <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                          <td class="text-end">Rp30.000.000</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="text-muted">84564564</a></td>
                          <td>Mio</td>
                          <td>355</td>
                          <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                          <td class="text-end">Rp 35.500.000</td>
                        </tr>
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 col-xl-4">
              <h5 class="mb-3">Riwayat Transaksi</h5>
              <div class="card">
                <div class="list-group list-group-flush">
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <div class="avtar avtar-s rounded-circle text-success bg-light-success">
                          <i class="ti ti-gift f-18"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1">Order #002434</h6>
                        <p class="mb-0 text-muted">Today, 2:00 AM</p>
                      </div>
                      <div class="flex-shrink-0 text-end">
                        <h6 class="mb-1">+ $1,430</h6>
                        <p class="mb-0 text-muted">78%</p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                          <i class="ti ti-message-circle f-18"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1">Order #984947</h6>
                        <p class="mb-0 text-muted">5 August, 1:45 PM</p>
                      </div>
                      <div class="flex-shrink-0 text-end">
                        <h6 class="mb-1">- $302</h6>
                        <p class="mb-0 text-muted">8%</p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                          <i class="ti ti-settings f-18"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1">Order #988784</h6>
                        <p class="mb-0 text-muted">7 hours ago</p>
                      </div>
                      <div class="flex-shrink-0 text-end">
                        <h6 class="mb-1">- $682</h6>
                        <p class="mb-0 text-muted">16%</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
    <!-- [ sample-page ] end -->
  </div>
@endsection
