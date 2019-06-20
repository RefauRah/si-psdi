<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="{{url('/assets/admin2/images/icon/logo-white.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="{{url('/assets/admin2/images/icon/avatar-big-01.jpg')}}" alt="John Doe" />
            </div>
            <h4 class="name">Admin</h4>
            <a href="#">Sign out</a>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
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
                    <a href="{{url('/siswa')}}">
                        <i class="fas fa-users"></i>Siswa</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-sitemap"></i>Kelas</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user"></i>Wali Kelas</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-book"></i>Mata Pelajaran</a>
                </li>
                <li>
                    <a>Data Absensi</a>
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
</aside>