<<<<<<< HEAD
<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="{{url('/assets/admin2/images/icon/logo-white.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <!-- <div class="image img-cir img-120">
                <img src="{{url('/assets/admin2/images/icon/avatar-big-01.jpg')}}" alt="John Doe" />
            </div> -->
            <h4 class="name">Admin</h4>
            
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{url('/home')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin')}}">
                        <i class="fas fa-user"></i>Admin</a>
                </li>
                <li>
                    <a href="{{url('/guru')}}">
                        <i class="fas fa-users"></i>Guru</a>
                </li>
                <li>
                    <a href="{{url('/staf')}}">
                        <i class="fas fa-users"></i>Staff</a>
                </li>
                <li>
                    <a href="{{url('/siswa')}}">
                        <i class="fas fa-users"></i>Siswa</a>
                </li>
                <li>
                    <a href="{{url('/kelas')}}">
                        <i class="fas fa-sitemap"></i>Kelas</a>
                </li>
                <li>
                    <a href="{{url('/walikelas')}}">
                        <i class="fas fa-user"></i>Wali Kelas</a>
                </li>
           
                <li>
                    <a class="text-center">Data Absensi</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-calendar"></i>Absensi
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{url('/absenguru')}}">
                                <i class="fas fa-circle"></i>Guru</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-circle"></i>Jam Pelajaran</a>
                        </li>
                        <li>
                            <a href="{{url('/absensiswapengajian')}}">
                                <i class="fas fa-circle"></i>Siswa Pengajian</a>
                        </li>
                        <li>
                            <a href="{{url('/absensiswasekolah')}}">
                                <i class="fas fa-circle"></i>Siswa Sekolah</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-print"></i>Laporan Absensi
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="#">
                                <i class="fas fa-circle"></i>Guru</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-circle"></i>Jam Mengajar</a>
                        </li>
                        <li>
                            <a href="{{url('/laporansiswapengajian')}}">
                                <i class="fas fa-circle"></i>Siswa Pengajian</a>
                        </li>
                        <li>
                            <a href="{{url('/laporansiswasekolah')}}">
                                <i class="fas fa-circle"></i>Siswa Sekolah</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
=======
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
    <h4 class="header text-center" style="color:white">Admin</h4>
    </div>
    <!-- search form -->
    
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="bg-black">
        <a href="{{url('/home')}}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="header">DATA CIVITAS AKADEMIKA</li>
    @if(Gate::check('isAdmin')|| Gate::check('isSuper_admin'))
    <li class="">
        <a href="{{url('/admin')}}">
            <i class="fa fa-user"></i>
            <span>Admin</span>
            <span class="">
                <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
            </span>
        </a>
        
    </li>
   
    <li class="">
        <a href="{{url('/guru')}}">
        <i class="fa fa-users"></i>
        <span>Guru</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li>
    <li class="">
        <a href="{{url('/staf')}}">
        <i class="fa fa-users"></i>
        <span>Staff</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li>
    @endif
    @if(Gate::check('isBimbel')|| Gate::check('isSuper_admin')|| Gate::check('isAdmin'))
    <li class="">
        <a href="{{url('/siswa')}}">
        <i class="fa fa-users"></i>
        <span>Siswa</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li>
   @endif
   @if(Gate::check('isAdmin')|| Gate::check('isSuper_admin'))
    <li class="">
        <a href="{{url('/kelas')}}">
        <i class="fa fa-sitemap"></i>
        <span>Kelas</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li>
    <li class="">
        <a href="{{url('/walikelas')}}">
        <i class="fa fa-user"></i>
        <span>Wali Kelas</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li>
   <!--  <li class="">
        <a href="{{url('/mapel')}}">
        <i class="fa fa-book"></i>
        <span>Mata Pelajaran</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li> -->
    <!-- <li class="">
        <a href="{{url('/keuangan')}}">
        <i class="fa fa-money"></i>
        <span>Pembayaran</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
        
    </li> -->
    <!-- <li class="">
        <a href="#">
        <i class="fa fa-book"></i>
        <span>Jam Pelajaran</span>
        <span class="">
            <i class="fa fa-angle-double-right pull-right" style="margin-right:10px;"></i>
        </span>
        </a>
    </li> -->
    <li class="header">DATA ABSENSI</li>
    <li class="treeview">
        <a href="#absen">
        <i class="fa fa-calendar"></i>
        <span>Absensi</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul id="absen" class="treeview-menu">
        <li><a href="{{url('/absenguru')}}"><i class="fa fa-circle-o"></i> Guru</a></li>
        <li><a href="{{url('/absenstaf')}}"><i class="fa fa-circle-o"></i> Staff</a></li>
        <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Jam Mengajar</a></li> -->
        <li  class="treeview">
            <a href="#siswa">
            <i class="fa fa-users"></i>
            <span>Siswa</span>
            <span class="pull-right-container">
                <i class="fa fa-angel-left pull-right"></i>
            </span>
            </a>
            <ul id="siswa" class="treeview-menu">
                <li><a href="/absenpascamubaligh"><i class="fa fa-circle-o"></i>Absen Pasca Mubaligh</a></li>
                <li><a href="/absenpramubaligh"><i class="fa fa-circle-o"></i>Absen Pra Mubaligh</a></li>
                <li><a href="/absensiswasekolah"><i class="fa fa-circle-o"></i>Absen Sekolah</a></li>
                <li><a href="/absenbimbel"><i class="fa fa-circle-o"></i>Absen Bimbel</a></li>
                <li><a href="/absenpesantren"><i class="fa fa-circle-o"></i>Absen Pesantren</a></li>
               

            </ul>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-print"></i>
        <span>Laporan Absensi</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('/absenguru/laporanAbsensiGuru')}}"><i class="fa fa-circle-o"></i> Guru</a></li>
        <li><a href="{{url('/absenstaf/laporanAbsensiStaf')}}"><i class="fa fa-circle-o"></i> Staff</a></li>
        <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Jam Mengajar</a></li> -->
        <li><a href="/absensiswasekolah/LaporanSiswaSekolah"><i class="fa fa-circle-o"></i> Siswa Sekolah</a></li>
        <li><a href="/absenpascamubaligh/LaporanPascaMubaligh"><i class="fa fa-circle-o"></i> Pasca Mubaligh</a></li>
        <li><a href="/absenpramubaligh/LaporanPraMubaligh"><i class="fa fa-circle-o"></i> Pra Mubaligh</a></li>
        <li><a href="/absenbimbel/LaporanBimbel"><i class="fa fa-circle-o"></i> Absen Bimbel</a></li>

        </ul>
    </li>
    </ul>
    @endif
</section>
<!-- /.sidebar -->
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
</aside>