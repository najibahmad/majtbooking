<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }} </p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="{{ url('/home') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>

      </li>

      <li class="treeview active">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Transaksi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{ url('transaction') }}"><i class="fa fa-circle-o"></i> Daftar Booking </a></li>
          <li><a href=""><i class="fa fa-circle-o"></i> Input Data Booking</a></li>

        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-table"></i> <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('transaction') }}"><i class="fa fa-circle-o"></i> Rekap Sewa</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i> Penerimaan dan Pengeluaran</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i> Arus Kas</a></li>

        </ul>
      </li>









    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
