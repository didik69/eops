<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="<?= base_url() ?>/template/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">UX Designer <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
					    <label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="<?= base_url('home') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					
					
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Master Data</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="<?= base_url('datasekolah') ?>">Data Sekolah</a></li>
					        <li><a href="<?= base_url('kompetensikeahlian') ?>">Kompetensi Keahlian</a></li>
					        <li><a href="<?= base_url('datakelas') ?>">Data Kelas</a></li>
							<li><a href="<?= base_url('rombel') ?>">Rombel</a></li>
					        
					    </ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Data GTK</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="<?= base_url('guru') ?>">Guru</a></li>
					        <li><a href="<?= base_url('tendik') ?>">Tendik</a></li>
					        
					    </ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Data SISWA</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="<?= base_url('SiswaAktif') ?>">Siswa Aktif</a></li>
					        <li><a href="<?= base_url('') ?>">Siswa Mutasi</a></li>
							<li><a href="<?= base_url('') ?>">Siswa Lulus</a></li>
							<li><a href="<?= base_url('') ?>">Siswa Mengundurkan Diri</a></li>
					    </ul>
					</li>
					
					<li class="nav-item">
					    <a href="<?= base_url('DataUser') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Data User</span></a>
					</li>
					

				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->