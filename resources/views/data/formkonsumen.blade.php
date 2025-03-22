@extends('master')
@section('title')
    Form Konsumen
@endsection

@section('konten')
<div class="d-flex justify-content-between align-items-center px-4">
    <h3 class="m-0">Data Konsumen </h3>

</div>
<div class="row">

    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Form Konsumen</h5>
        </div>

        <table class="table table-hover table-borderless mb-0">
            <thead>
              <tr>
                <th>No Order.</th>
                <th>Nama Kendaraan</th>
                <th>Total Order</th>
                <th>Status</th>
                <th class="text-end">Total Harga</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
                <tr>
                  <td><a href="#" class="text-muted">84564564</a></td>
                  <td>Suprax</td>
                  <td>40</td>
                  <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                  <td class="text-end">Rp400.000</td>
                  <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailbukuModal" id="btnDetail">
                    <i class="ti ti-dots"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#detailbukuModal" id="btnDetail">
                    <i class="ti ti-trash"></i>
                </button></td>
                </tr>
                <tr>
                  <td><a href="#" class="text-muted">84564564</a></td>
                  <td>Scoopy</td>
                  <td>300</td>
                  <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                  <td class="text-end">Rp30.000.000</td>
                  <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailbukuModal" id="btnDetail">
                    <i class="ti ti-dots"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#detailbukuModal" id="btnDetail">
                    <i class="ti ti-trash"></i>
                </button></td>
                </tr>
                <tr>
                  <td><a href="#" class="text-muted">84564564</a></td>
                  <td>Mio</td>
                  <td>355</td>
                  <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                  <td class="text-end">Rp 35.500.000</td>
                  <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailbukuModal" id="btnDetail">
                    <i class="ti ti-dots"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#detailbukuModal" id="btnDetail">
                    <i class="ti ti-trash"></i>
                </button></td>
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
              </tbody>
        </table>
          </div>
        </div>
    </div>
    <div>
        <a class="btn btn-primary" href="/tambahkonsumen">
            <i class="fa-solid fa-circle-plus"></i> Tambah Konsumen
        </a>
    </div>
    <!-- [ sample-page ] end -->

@endsection
