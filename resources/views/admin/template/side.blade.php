<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
    <div class="pull-left image">
        <img src="{{url('/assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
            </span>
    </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="active treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="header">DATA CIVITAS AKADEMIKA</li>
    <li class="">
        <a href="{{url('/admin')}}">
            <i class="fa fa-user"></i>
            <span>Admin</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        
    </li>
    <li class="">
        <a href="{{url('/guru')}}">
        <i class="fa fa-users"></i>
        <span>Guru</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        
    </li>
    <li class="">
        <a href="{{url('/siswa')}}">
        <i class="fa fa-users"></i>
        <span>Siswa</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        
    </li>
    <li class="">
        <a href="{{url('/kelas')}}">
        <i class="fa fa-sitemap"></i>
        <span>Kelas</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        
    </li>
    <li class="">
        <a href="{{url('/walikelas')}}">
        <i class="fa fa-user"></i>
        <span>Wali Kelas</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        
    </li>
    <li class="">
        <a href="{{url('/mapel')}}">
        <i class="fa fa-book"></i>
        <span>Mata Pelajaran</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        
    </li>
    <li class="">
        <a href="#">
        <i class="fa fa-book"></i>
        <span>Jam Pelajaran</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
    </li>
    <li class="header">DATA ABSENSI</li>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-calendar"></i>
        <span>Absensi</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Guru</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Jam Mengajar</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Siswa</a></li>
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
        <li><a href="#"><i class="fa fa-circle-o"></i> Guru</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Jam Mengajar</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Siswa</a></li>
        </ul>
    </li>
    </ul>
</section>
<!-- /.sidebar -->
</aside>