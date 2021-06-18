<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Rombel</h5>
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
                
                    <div class="card-header text-right">
                        <a href="" class='btn btn-success btn-sm mr-auto'>Tambah</a>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table1">
                                <thead>
                                    
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nik</th>
                                        <th>Jk</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tgl Lahir</th>
                                        <th>Rombel</th>
                                        <th>Ket</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($siswaaktif as $aktif) :?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $aktif['nama']?></td>
                                        <td><?= $aktif['nik_siswa']?></td>
                                        <td><?= $aktif['jk']?></td>
                                        <td><?= $aktif['tempatlahir_siswa']?></td>
                                        <td><?= $aktif['tgllahir_siswa']?></td>
                                        <td></td>
                                        <td>
                                        <a href="#" class="tombol-hapus badge badge-success"><i class="feather icon-eye" data-toggle="modal" onclick="return hapus();"></i></a>
                                        <a href="<?= base_url()?>/siswaaktif/edit/<?= $aktif['id_siswa'] ?>" class="badge badge-primary"><i class="feather icon-edit"></i></a>
                                        <a href="#" class="tombol-hapus badge badge-warning"><i class="feather icon-printer" data-toggle="modal" onclick="return hapus();"></i></a>
                                        <a href="<?= base_url()?>/siswaaktif/delete/<?= $aktif['id_siswa'] ?>"class="tombol-hapus badge badge-danger"><i class="feather icon-trash-2" data-toggle="modal" onclick="return hapus();"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $no = $no+1;
                                    endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ basic-table ] end -->