@extends('template')

@section('main')

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin:30px 0px 30px 0px">
        <h1 class="text-center">Silahkan Lengkapi Formulir Pemesanan</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <form class="form-horizontal text-left" role="form">
          <div class="form-group">
            <div class="col-sm-4">
              <label for="inputEmail3" class="control-label">Nama</label>
            </div>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <label for="inputPassword3" class="control-label">Alamat</label>
            </div>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <label for="inputEmail3" class="control-label">No. Telp Rumah</label>
            </div>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <label for="inputEmail3" class="control-label">No. HP</label>
            </div>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <label for="inputEmail3" class="control-label">Tempat / Ruangan</label>
            </div>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <label for="inputEmail3" class="control-label">Hari, Tgl Penggunaan</label>
            </div>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <label for="inputEmail3" class="control-label">Jenis Acara</label>
            </div>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>

        </form>
        <p class="text-center" style="margin-top:20px">Dengan menekan tombol "Booking" maka Anda telah menyetuji peraturan yang telah dibuat oleh Manajemen Masjid Agung Jawa Tengah,
          <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
          <br>Ut enim ad minim veniam, quis nostrud</p>
        <button type="submit" class="btn btn-default">Booking</button>
      </div>
    </div>
  </div>
</div>
@endsection
