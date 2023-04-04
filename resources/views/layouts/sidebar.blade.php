<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('AdminLTE-2/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a>
                    <i class="fa fa-bars"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="header">MASTER
                <li>
                    <a href="{{ route('kategori.index') }}">
                        <i class="fa fa-cubes"></i> <span>Kategori</span>
                    </a>
                    <a>
                        <i class="fa fa-cube"></i> <span>Produk</span>
                    </a>
                    <a>
                        <i class="fa fa-user-o"></i> <span>Member</span>
                    </a>
                    <a>
                        <i class="fa fa-users"></i> <span>Supplier</span>
                    </a>
                </li>
            </li>
            <li class="header">TRANSAKSI
                <li>
                    <a>
                        <i class="fa fa-cart-arrow-down"></i> <span>Pengeluararn</span>
                    </a>
                    <a>
                        <i class="fa fa-cart-plus"></i> <span>Pembelian</span>
                    </a>
                    <a>
                        <i class="fa fa-shopping-basket"></i> <span>Penjualan</span>
                    </a>
                    <a>
                        <i class="fa fa-bookmark-o"></i> <span>Transaksi Lama</span>
                    </a>
                    <a>
                        <i class="fa fa-bookmark"></i> <span>Transaksi Baru</span>
                    </a>
                </li>
            </li>
            <li class="header">REPORT
                <li>
                    <a>
                        <i class="fa fa-bullhorn"></i> <span>Laporan</span>
                    </a>
                   
                </li>
            </li>
            <li class="header">SYSTEM
                <li>
                    <a>
                        <i class="fa fa-dashboard"></i> <span>User</span>
                    </a>
                   
                    <a>
                        <i class="fa fa-user-secret"></i> <span>Pengaturan</span>
                    </a>
                   
                </li>
            </li>
    

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
