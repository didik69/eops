<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Detail Siswa <?=$siswa->nama?></h5>
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
                                            <td><?=$siswa->nama?></td>
                                        </tr>

                                        <tr>
                                            <td>Kelas</td>
                                            <td><?= $siswa->slug_kelas?></td>
                                        </tr>

                                        <tr>
                                            <td>NISN</td>
                                            <td><?= $siswa->nisn?></td>
                                        </tr>

                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td><?= $siswa->jk?></td>
                                        </tr>

                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td><?= $siswa->tempatlahir_siswa?></td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td><?=$siswa->tgllahir_siswa?></td>
                                        </tr>

                                        <tr>
                                            <td>Nama Ibu Kandung</td>
                                            <td><?=$siswa->nama_ibu?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- tutup identitas -->

        </div>
    </div>
    <!-- [ Main Content ] end -->
