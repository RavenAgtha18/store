<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{ auth()->user()->name }}</p>
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
                    <a href="{{ route('produk.index') }}">
                        <i class="fa fa-cube"></i> <span>Produk</span>
                    </a>
                    <a href="{{ route('member.index') }}">
                        <i class="fa fa-user-o"></i> <span>Member</span>
                    </a>
                    <a href="{{ route('supplier.index') }}">
                        <i class="fa fa-users"></i> <span>Supplier</span>
                    </a>
                </li>
            </li>
            <li class="header">TRANSAKSI
                <li>
                    <a href="{{ route('pengeluaran.index') }}">
                        <i class="fa fa-cart-arrow-down"></i> <span>Pengeluararn</span>
                    </a>
                    <a href="{{ route('pembelian.index') }}">
                        <i class="fa fa-cart-plus"></i> <span>Pembelian</span>
                    </a>
                    <a href="{{ route('penjualan.index') }}">
                        <i class="fa fa-shopping-basket"></i> <span>Penjualan</span>
                    </a>
                    <a href="{{ route('transaksi.index') }}">
                        <i class="fa fa-bookmark-o"></i> <span>Transaksi Lama</span>
                    </a>
                    <a href="{{ route('transaksi.baru') }}">
                        <i class="fa fa-bookmark"></i> <span>Transaksi Baru</span>
                    </a>
                </li>
            </li>
            <li class="header">REPORT
                <li>
                    <a href="{{ route('laporan.index') }}">
                        <i class="fa fa-bullhorn"></i> <span>Laporan</span>
                    </a>
                   
                </li>
            </li>
            <li class="header">SYSTEM
                <li>
                    <a href="{{ route('user.index') }}">
                        <i class="fa fa-dashboard"></i> <span>User</span>
                    </a>
                   
                    <a href="{{ route("setting.index") }}">
                        <i class="fa fa-user-secret"></i> <span>Pengaturan</span>
                    </a>
                   
                </li>
            </li>
    

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
