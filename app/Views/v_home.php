<?php

use App\Controllers\SiswaAktif;
?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- page statustic card start -->
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow"><?= count($siswa) ?></h4>
                                        <h6 class="text-muted m-b-0">Jumlah Siswa</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="fa fa-users f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-yellow">
                                <a href="<?= base_url('siswaaktif'); ?>">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">Lihat Data</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-arrow-right text-white f-16"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green"><?= count($guru) ?></h4>
                                        <h6 class="text-muted m-b-0">Jumlah Guru</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-file-text f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <a href="<?= base_url('guru') ?>">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">Lihat Data</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-arrow-right text-white f-16"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red"><?= count($kelas) ?></h4>
                                        <h6 class="text-muted m-b-0">Jumlah Rombel</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-calendar f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-red">
                                <a href="<?= base_url('rombel') ?>">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">Lihat Data</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-arrow-right text-white f-16"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue">500</h4>
                                        <h6 class="text-muted m-b-0">Downloads</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-thumbs-down f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-blue">
                                <a href="<?= base_url() ?>">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">Lihat Data</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-arrow-right text-white f-16"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page statustic card end -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- page statustic card start -->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-header bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <h5 class="text-white m-b-0">Data Sekolah</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-xl-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td class="strong" >Nama Sekolah</td>
                                                    <td>: <?= $sekolah->nama_sekolah?></td>
                                                </tr>
                                                <tr>
                                                    <td class="strong" >NPSN</td>
                                                    <td>: <?= $sekolah->npsn?></td>
                                                </tr>
                                                <tr>
                                                    <td class="strong" >Alamat Sekolah</td>
                                                    <td>: <?= $sekolah->alamat_sekolah?></td>
                                                </tr>
                                                <tr>
                                                    <td class="strong" >Nomor Telpon</td>
                                                    <td>: <?= $sekolah->no_tlpn?></td>
                                                </tr>
                                                <tr>
                                                    <td class="strong" >Email Sekolah</td>
                                                    <td>: <?= $sekolah->email_sekolah?></td>
                                                </tr>
                                                <tr>
                                                    <td class="strong" >Tingkat Pendidikan</td>
                                                    <td>: <?= $sekolah->tingkat_pendidikan?></td>
                                                </tr>
                                                <tr>
                                                    <td class="strong" >Nama Kepala Sekolah</td>
                                                    <td>: <?= $sekolah->nama_kepsek?></td>
                                                </tr>
                                                <tr>
                                                    <td class="strong" >Nomor Telpon Kepsek</td>
                                                    <td>: <?= $sekolah->no_tlp_kepsek?></td>
                                                </tr>
                                                <tr>
                                                    <td class="strong" >Logo</td>
                                                    <td>: <?= $sekolah->logo?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header bg-c-yellow">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <h5 class="text-white m-b-0">Lihat Data</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow"><?= count($siswa) ?></h4>
                                        <h6 class="text-muted m-b-0">Jumlah Siswa</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="fa fa-users f-28"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page statustic card end -->
            </div>
        </div>
        <!-- [ Main Content ] end -->