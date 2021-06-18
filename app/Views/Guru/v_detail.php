<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Guru</h5>
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
        <div id="accordion">
        <!-- open identitas -->
            <div class="card">
                <div class="card-header" id="identitas">
                    <h3 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#ident" aria-expanded="true" aria-controls="ident">
                        IDENTITAS
                        </button>
                    </h3>
                </div>

                <div id="ident" class="collapse show" aria-labelledby="identitas" data-parent="#accordion">
                    <div class="card-body">

                        <div class="col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td><?=$guru->nama_lengkap?></td>
                                        </tr>

                                        <tr>
                                            <td>NIK</td>
                                            <td><?= $guru->nik?></td>
                                        </tr>

                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td><?= $guru->jenis_kelamin?></td>
                                        </tr>

                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td><?= $guru->tempat_lahir?></td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td><?=$guru->tanggal_lahir?></td>
                                        </tr>

                                        <tr>
                                            <td>Nama Ibu Kandung</td>
                                            <td><?=$guru->ibu_kandung?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- tutup identitas -->

                <!-- open data Pribadi -->
                <div class="card">
                    <div class="card-header" id="datapribadi">
                        <h3 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#dp" aria-expanded="true" aria-controls="dp">
                            DATA PRIBADI
                            </button>
                        </h3>
                    </div>

                    <div id="dp" class="collapse show" aria-labelledby="datapribadi" data-parent="#accordion">
                        <div class="card-body">

                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Data</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Alamat</td>
                                                <td><?=$guru->alamat_jalan?></td>
                                            </tr>

                                            <tr>
                                                <td>Rt</td>
                                                <td><?=$guru->rt?></td>
                                            </tr>

                                            <tr>
                                                <td>Rw</td>
                                                <td><?=$guru->rw?></td>
                                            </tr>

                                            <tr>
                                                <td>Nama Dusun</td>
                                                <td><?=$guru->dusun?></td>
                                            </tr>

                                            <tr>
                                                <td>Desa</td>
                                                <td><?=$guru->desa?></td>
                                            </tr>

                                            <tr>
                                                <td>Kecamatan</td>
                                                <td><?=$guru->kecamatan?></td>
                                            </tr>

                                            <tr>
                                                <td>Kode Pos</td>
                                                <td><?=$guru->kode_pos?></td>
                                            </tr>

                                            <tr>
                                                <td>Agama</td>
                                                <td><?=$guru->agama?></td>
                                            </tr>

                                            <tr>
                                                <td>Npwp</td>
                                                <td><?=$guru->npwp?></td>
                                            </tr>

                                            <tr>
                                                <td>Nama Wajib Pajak</td>
                                                <td><?=$guru->nama_pajak?></td>
                                            </tr>

                                            <tr>
                                                <td>Kewarganegaraan</td>
                                                <td><?=$guru->kewarganegaraan?></td>
                                            </tr>

                                            <tr>
                                                <td>Status Perkawinan</td>
                                                <td><?= $guru->status_perkawinan?></td>
                                            </tr>

                                            <tr>
                                                <td>Nama Suami/Isteri</td>
                                                <td><?=$guru->nama_suami_istri?></td>
                                            </tr>

                                            <tr>
                                                <td>Pekerjaan Suami Isteri</td>
                                                <td><?=$guru->pekerjaan_suami_istri?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tutup data Pribadi -->

                <!-- open kepegawaian -->
                <div class="card">
                    <div class="card-header" id="kepegawaian">
                        <h3 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#kpg" aria-expanded="true" aria-controls="dp">
                            KEPEGAWAIAN
                            </button>
                        </h3>
                    </div>

                    <div id="kpg" class="collapse show" aria-labelledby="kepegawaian" data-parent="#accordion">
                        <div class="card-body">

                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Data</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Status Kepegawaian</td>
                                                <td><?=$guru->status_kepegawaian?></td>
                                            </tr>

                                            <tr>
                                                <td>NIY</td>
                                                <td><?=$guru->niy?></td>
                                            </tr>

                                            <tr>
                                                <td>NUPTK</td>
                                                <td><?=$guru->nuptk?></td>
                                            </tr>

                                            <tr>
                                                <td>Jenis Ptk</td>
                                                <td><?=$guru->jenis_ptk?></td>
                                            </tr>

                                            <tr>
                                                <td>No Sk Pengangkatan</td>
                                                <td><?=$guru->sk_pengangkatan?></td>
                                            </tr>

                                            <tr>
                                                <td>TMT Pengangkatan</td>
                                                <td><?=$guru->tmt_pengangkatan?></td>
                                            </tr>

                                            <tr>
                                                <td>Lembaga Pengangkat</td>
                                                <td><?=$guru->lembaga_pengangkat?></td>
                                            </tr>

                                            <tr>
                                                <td>Pangkat/Golongan</td>
                                                <td><?=$guru->pangkat?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tutup kepegawaian -->

                <!-- open kontak -->
                <div class="card">
                    <div class="card-header" id="kontak">
                        <h3 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#ktk" aria-expanded="true" aria-controls="dp">
                           KONTAK
                            </button>
                        </h3>
                    </div>

                    <div id="ktk" class="collapse show" aria-labelledby="kontak" data-parent="#accordion">
                        <div class="card-body">

                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Data</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>No Hp</td>
                                                <td><?=$guru->no_hp?></td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td><?=$guru->email?></td>
                                            </tr>

                                            <tr>
                                                <td>Username</td>
                                                <td><?=$guru->username?></td>
                                            </tr>

                                            <tr>
                                                <td>Pasword</td>
                                                <td><?=$guru->pasword?></td>
                                            </tr>

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tutup kontak -->

                <!-- open penugasan -->
                <div class="card">
                    <div class="card-header" id="penugasan">
                        <h3 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#png" aria-expanded="true" aria-controls="dp">
                            PENUGASAN
                            </button>
                        </h3>
                    </div>

                    <div id="png" class="collapse show" aria-labelledby="penugasan" data-parent="#accordion">
                        <div class="card-body">

                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Data</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>No. Surat Tugas</td>
                                                <td><?=$guru->no_surat_tugas?></td>
                                            </tr>

                                            <tr>
                                                <td>Tanggal Surat Tugas</td>
                                                <td><?=$guru->tgl_surat_tugas?></td>
                                            </tr>

                                            <tr>
                                                <td>TMT Tugas</td>
                                                <td><?=$guru->tmt_tugas?></td>
                                            </tr>

                                            <tr>
                                                <td>Status Sekolah Induk</td>
                                                <td><?=$guru->status?></td>
                                            </tr>

                                            <tr>
                                                <td>Keluar Karena</td>
                                                <td><?=$guru->keluar?></td>
                                            </tr>

                                            <tr>
                                                <td>Tgl Keluar</td>
                                                <td><?=$guru->tgl_keluar?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tutup penugasan -->

                <!-- open tugas tambahan -->
                <div class="card">
                    <div class="card-header" id="tugastambahan">
                        <h3 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#tt" aria-expanded="true" aria-controls="dp">
                           TUGAS TAMBAHAN
                            </button>
                        </h3>
                    </div>

                    <div id="tt" class="collapse show" aria-labelledby="tugastambahan" data-parent="#accordion">
                        <div class="card-body">

                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Data</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Jabatan Ptk</td>
                                                <td><?=$guru->jabatan_ptk?></td>
                                            </tr>

                                            <tr>
                                                <td>TMT Tugas Tambahan</td>
                                                <td><?=$guru->tmt_tugas_tambahan?></td>
                                            </tr>

                                            <tr>
                                                <td>No SK Tugas Tambahan</td>
                                                <td><?=$guru->no_sk_tambahan?></td>
                                            </tr>

                                            <tr>
                                                <td>TST Tugas Tambahan</td>
                                                <td><?=$guru->tst_tugas_tambahan?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tutup tugas tambahan -->

                <!-- open Pendidikan-->
                <div class="card">
                    <div class="card-header" id="pendidikan">
                        <h3 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#pend" aria-expanded="true" aria-controls="pend">
                            DATA PENDIDIKAN
                            </button>
                        </h3>
                    </div>

                    <div id="pend" class="collapse show" aria-labelledby="pendidikan" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table1 table-sm mt-5">
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
                                        <?php 
                                        $no = 1;
                                        // print_r($pendidikan); exit();
                                        foreach($pendidikan as $pdkn) :?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $pdkn['jenjang_pendidikan']?></td>
                                                <td><?= $pdkn['bidang_studi']?></td>
                                                <td><?= $pdkn['gelar_akademik']?></td>
                                                <td><?= $pdkn['satuan_pendidikan_formal']?></td>
                                                <td><?= $pdkn['jurusan']?></td>
                                                <td><?= $pdkn['tahun_masuk']?></td>
                                                <td><?= $pdkn['tahun_lulus']?></td>
                                            </tr>
                                            <?php
                                        $no = $no+1;
                                        endforeach ?>
                                        </tbody>
                                    </table>   
                        </div>
                    </div>
                </div>
                <!-- tutup Pendidikan-->

                <!-- open sertifikasi -->
                <div class="card">
                    <div class="card-header" id="sertifikasi">
                        <h3 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#sr" aria-expanded="true" aria-controls="dp">
                            SERTIFIKASI
                            </button>
                        </h3>
                    </div>

                    <div id="sr" class="collapse show" aria-labelledby="sertifikasi" data-parent="#accordion">
                        <div class="card-body">

                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Data</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Jenis Sertifikasi</td>
                                                <td><?=$guru->jenis_sertifikasi?></td>
                                            </tr>

                                            <tr>
                                                <td>Nomor Sertifikasi</td>
                                                <td><?=$guru->nomor_sertifikasi?></td>
                                            </tr>

                                            <tr>
                                                <td>Tahun Sertifikasi</td>
                                                <td><?=$guru->tahun_sertifikasi?></td>
                                            </tr>

                                            <tr>
                                                <td>Bidang Studi</td>
                                                <td><?=$guru->bidang_studi?></td>
                                            </tr>

                                            <tr>
                                                <td>NRG</td>
                                                <td><?=$guru->nrg?></td>
                                            </tr>

                                            <tr>
                                                <td>No.Peserta</td>
                                                <td><?=$guru->nopes?></td>
                                            </tr>

                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tutup sertifikasi -->

                

        </div>
    </div>
    <!-- [ Main Content ] end -->
