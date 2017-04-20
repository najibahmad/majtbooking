@extends('admin.template')

@section('main')
<div id="page-wrapper">

    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-8">
              <h1 class="page-header">
                  DASBOARD
              </h1>
              <ol class="breadcrumb">
                  <li>
                      <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                  </li>
                  <li class="active">
                      <i class="fa fa-table"></i> Daftar Booking
                  </li>
              </ol>
          </div>
      </div>

      <div class="row">

            <div class="col-lg-12">
              <div class="tombol-nav">

                  <p align="right"><strong> Jumlah Transaksi: {{ $trans_total }} </strong></p>
            </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pemesan</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Gedung</th>
                                <th>Tanggal Sewa</th>
                                <th>Shift</th>
                                <th>Harga Sewa</th>
                                <th>DP Sewa</th>
                                <th>Status</th>
                                <th style="text-align:center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $i = ($trans_data->currentPage()-1)*$trans_data->perPage(); ?>
                          <?php foreach($trans_data as $row): ?>
                            <tr class="">
                                <td>{{ ++$i }}</td>
                                <td>{{ $row->customer->nama }}</td>
                                <td>{{ $row->customer->alamat }}</td>
                                <td>{{ $row->customer->hp }}</td>
                                <td>{{ $row->building->nama }}</td>
                                <td>{{ $row->tgl_sewa->format('d-M-Y') }}</td>
                                <td>{{ $row->waktu }}</td>
                                <td>{{ number_format($row->harga,0) }}</td>
                                <td>{{ number_format($row->dp,0) }}</td>
                                <td>
                                  @if($row->status==0)
                                    <p class="bg-danger">PENDING</p>
                                  @elseif($row->status==1)
                                    <p class="bg-warning">KONFIRMASI</p>
                                  @elseif($row->status==2)
                                    <p class="bg-info">BAYAR DP</p>
                                  @elseif($row->status==3)
                                    <p class="bg-success">LUNAS</p>
                                  @endif
                                </td>
                                <td style="max-width:75px">
                                  <div class="box-button">
                                    <div class="row" align="center">
                                      <div class="col-sm-6" align="center">{{ link_to('pengeluaran/' . $row->id . '/edit', ' ubah', ['class' => 'btn btn-warning btn-sm fa fa-edit ']) }}</div>


                                    </div>



                                </div>
                                </td>
                            </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>

                    <div class="table-nav">

                      <div clas="paging">
                        {{ $trans_data->links() }}
                      </div>


                    </div>


                </div>
            </div>



        </div>






    </div>
</div>
@endsection
