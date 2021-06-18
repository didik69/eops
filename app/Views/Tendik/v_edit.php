<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Data Guru</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Bootstrap Table</a></li>
                            <li class="breadcrumb-item"><a href="#!">Basic Tables</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ basic-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body table-border-style">

                        <!-- open navbar -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"></i> IDENTITAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">DATA PRIBADI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">KEPEGAWAIAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="kontak-tab" data-toggle="tab" href="#kontak" role="tab" aria-controls="kontak" aria-selected="false">KONTAK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="penugasan-tab" data-toggle="tab" href="#penugasan" role="tab" aria-controls="penugasan" aria-selected="false">PENUGASAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tugastambahan-tab" data-toggle="tab" href="#tugastambahan" role="tab" aria-controls="tugastambahan" aria-selected="false">TUGAS TAMBAHAN</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="pendidikan-tab" data-toggle="tab" href="#pendidikan" role="tab" aria-controls="pendidikan" aria-selected="false">PENDIDIKAN</a>
                            </li>

                         
                     
                        </ul>
<!-- Identitas                       -->
                            <div class="tab-content mt-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">NIK</label>
                                                <div class="col-sm-8">
                                                <input type="number" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-8">
                                                <input type="date" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                        <option value=""></option>
                                                        <option value="L">Laki-Laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label"> Nama Ibu Kandung</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </div>
<!-- tutup Identitas -->

<!-- DATA PRIBADI -->
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tabProfil">
                            <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Alamat Jln</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Agama</label>
                                                <div class="col-sm-8">
                                                <select class="form-control" name="agama" id="agama">
                                                        <option value=""></option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen/Protestan">Kristen/Protestan</option>
                                                        <option value="Katholik">Katholik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Khong Hu Cu">Khong Hu Cu</option>
                                                        <option value="Kepercayaan Kpd Tuhan YME">Kepercayaan Kpd Tuhan YME</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Rt</label>
                                                <div class="col-sm-8">
                                                <input type="email" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">NPWP</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Rw</label>
                                                <div class="col-sm-8">
                                                <input type="email" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Wajib Pajak</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Dusun</label>
                                                <div class="col-sm-8">
                                                <input type="email" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Desa/kelurahan</label>
                                                <div class="col-sm-8">
                                                <input type="email" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Status Perkawinan</label>
                                                <div class="col-sm-8">
                                                <select class="form-control" name="status_perkawinan" id="status_perkawinan">
                                                        <option value=""></option>
                                                        <option value="Kawin">Kawin</option>
                                                        <option value="Belum Kawin">Belum Kawin</option>
                                                        <option value="Janda">Janda</option>
                                                        <option value="Duda">Duda</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Kecamatan</label>
                                                <div class="col-sm-8">
                                                <input type="email" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Suami/Istri</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Kode Pos</label>
                                                <div class="col-sm-8">
                                                <input type="email" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pekerjaan Suami /Istri</label>
                                                <div class="col-sm-8">
                                                <select class="form-control" name="Pekerjaan_suami_istri" id="Pekerjaan_suami_istri">
                                                        <option value=""></option>
                                                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                        <option value="Nelayan">Nelayan</option>
                                                        <option value="Petani">Petani</option>
                                                        <option value="Peternak">Peternak</option>
                                                        <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Pedagang Kecil">Pedagang Kecil</option>
                                                        <option value="Pedagang Besar">Pedagang Besar</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                        <option value="Wirausaha">Wirausaha</option>
                                                        <option value="Buruh">Buruh</option>
                                                        <option value="Pensiunan">Pensiunan</option>
                                                        <option value="Guru Swasta">Guru Swasta</option>
                                                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                                                        <option value="Lain-lain">Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
<!-- TUTUP DATA PRIBADI  -->


<!-- KEPEGAWAIAN -->
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Status Kepegawaian</label>
                                                <div class="col-sm-8">
                                                <select class="form-control" name="status_kepegawaian" id="status_kepegawaian">
                                                        <option value=""></option>
                                                        <option value="PNS Diperbantukan">PNS Diperbantukan</option>
                                                        <option value="GTY/PTY">GTY/PTY</option>
                                                        <option value="GTT/PTT">GTT/PTT</option>
                                                        <option value="Guru Honor Sekolah">Guru Honor Sekolah</option>
                                                        <option value="Tenaga Honor Sekolah">Tenaga Honor Sekolah</option>
                                                        <option value="Lain-lain">Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label"> No Sk Pengangkatan</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">NIY/NIGK</label>
                                                <div class="col-sm-8">
                                                <input type="email" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">TMT Pengangkatan</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">NUPTK</label>
                                                <div class="col-sm-8">
                                                <input type="email" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Lembaga Pengangkat</label>
                                                <div class="col-sm-8">
                                                <select class="form-control" name="jenis_ptk" id="jenis_ptk">
                                                        <option value=""></option>
                                                        <option value="Ketua Yayasan">Ketua Yayasan</option>
                                                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                        <option value="Komite Sekolah">Komite Sekolah</option>
                                                        <option value="Lain-lain">Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Jenis Ptk</label>
                                                <div class="col-sm-8">
                                                <select class="form-control" name="jenis_ptk" id="jenis_ptk">
                                                        <option value=""></option>
                                                        <option value="Guru Mata Pelajaran">Guru Mata Pelajaran</option>
                                                        <option value="Guru Bk">Guru Bk</option>
                                                        <option value="Tenaga Admninstrasi Sekolah">Tenaga Admninstrasi Sekolah</option>
                                                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                        <option value="Lain-lain">Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pangkat/Golongan</label>
                                                <div class="col-sm-8">
                                                <select class="form-control" name="jenis_ptk" id="jenis_ptk">
                                                        <option value=""></option>
                                                        <option value="I/a">I/a</option>
                                                        <option value="I/b">I/b</option>
                                                        <option value="I/c">I/c</option>
                                                        <option value="I/d">I/d</option>
                                                        <option value="II/a">II/a</option>
                                                        <option value="II/b">II/b</option>
                                                        <option value="II/c">II/c</option>
                                                        <option value="II/d">II/d</option>
                                                        <option value="III/a">III/a</option>
                                                        <option value="III/b">III/b</option>
                                                        <option value="III/c">III/c</option>
                                                        <option value="III/d">III/d</option>
                                                        <option value="IV/a">IV/a</option>
                                                        <option value="IV/b">IV/b</option>
                                                        <option value="IV/c">IV/c</option>
                                                        <option value="IV/d">IV/d</option>
                                                        <option value="IV/e">IV/e</option>

                                                        <option value="Lain-lain">Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    



                            </div>
<!-- tutup KEPEGAWAIAN -->

<!-- penugasan -->
             <div class="tab-pane fade" id="penugasan" role="tabpanel" aria-labelledby="penugasan-tab">
             
             <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">No Surat Tugas</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Status Sekolah Induk</label>
                                                <div class="col-sm-8">
                                                <select class="form-control" name="status_sekolah_induk" id="status_sekolah_induk">
                                                        <option value=""></option>
                                                        <option value="PNS Diperbantukan">Ya</option>
                                                        <option value="GTY/PTY">Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Surat Tugas </label>
                                                <div class="col-sm-8">
                                                <input type="date" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Keluar Karena</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">TMT Tugas </label>
                                                <div class="col-sm-8">
                                                <input type="date" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Keluar</label>
                                                <div class="col-sm-8">
                                                <input type="date" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           </div>
<!-- close penugasan -->

<!-- kontak -->
        <div class="tab-pane fade" id="kontak" role="tabpanel" aria-labelledby="kontak-tab">
             
             <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">No HP</label>
                                                <div class="col-sm-8">
                                                <input type="number" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Username</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                <input type="email" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pasword</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           </div>
<!-- Close kontak -->

<!-- Tugas Tambahan -->
 <div class="tab-pane fade" id="tugastambahan" role="tabpanel" aria-labelledby="tugastambahan-tab">
             
             <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Jabatan PTK</label>
                                                <div class="col-sm-8">
                                                <input type="email" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">No Sk Tugas Tambahan</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">TMT Tugas Tambahan</label>
                                                <div class="col-sm-8">
                                                <input type="date" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">TST Tugas Tambahan</label>
                                                <div class="col-sm-8">
                                                <input type="date" class="form-control" id="inputEmail3" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           </div>

<!-- close tugas tambahan  -->

<!-- riwayat pendidikan -->
 <div class="tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
        <table class="table1 table-sm">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Jenjang Pendidikan</th>
                <th scope="col">Bidang Studi</th>
                <th scope="col">Gelar Akademik</th>
                <th scope="col">Satuan Pendidikan Formal</th>
                <th scope="col">Fakultas/ Jurusan</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">Tahun Lulus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                </tr>
            
            </tbody>
        </table>
 </div>
<!-- close riwayat pendidikan -->

<!-- riwayat sertifikasi -->
    <!-- <div class="tab-pane fade" id="sertifikasi" role="tabpanel" aria-labelledby="sertifikasi-tab">
    <table class="table table-sm">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis sertifikasi</th>
                <th scope="col">Nomor Sertifikasi</th>
                <th scope="col">tahun sertifikasi</th>
                <th scope="col">bidang studi</th>
                <th scope="col">NRG</th>
                <th scope="col">No Peserta</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>

            </tbody>
        </table>
    </div> -->
<!-- close riwayat sertifikasi -->
                    <!--close navbar -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ basic-table ] end -->

