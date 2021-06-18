<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Kompetensi Keahlian</h5>
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
                        <a href="" class='btn btn-success btn-sm mr-auto' data-toggle="modal" data-target="#tambah">Tambah</a>
                    
                    </div>
                    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('sukses') ?>"></div>
  

                    <div class="card-body table-border-style card-danger">
                        <div class="table-responsive">
                            <table class="table table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Jurusan</th>
                                        <th>Bidang Keahlian</th>
                                        <th>Program Keahlian</th>
                                        <th>Kompetensi Keahlian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                                    $no = 1;
                                    foreach($jurusan as $jrsn) :?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $jrsn['kode_jurusan']?></td>
                                        <td><?= $jrsn['bidang_keahlian']?></td>
                                        <td><?= $jrsn['program_keahlian']?></td>
                                        <td><?= $jrsn['kompetensi_keahlian']?></td>
                                        <td>
                                        <a href="#" class="badge badge-primary"><i class="feather icon-edit" data-toggle="modal" data-target="#edit<?=$jrsn['id_jurusan'] ?>" ></i></a>
                                        <a href="<?= base_url() ?>/KompetensiKeahlian/delete/<?=$jrsn['id_jurusan'] ?>" class="tombol-hapus badge badge-danger"><i class="feather icon-trash-2" data-toggle="modal" onclick="return hapus();"></i></a>
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

            <!-- Modal -->
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kompetensi Keahlian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open('KompetensiKeahlian/tambah')?>
                            <div class="form-group">
                                <label >Kode Jurusan</label>
                                <input type="number" class="form-control" name="kode_jurusan"  required >
                            </div>

                            <div class="form-group">
                                <label >Bidang Keahlian</label>
                                <input type="text" class="form-control" name="bidang_keahlian" required >
                            </div>

                            <div class="form-group">
                                <label >Program Keahlian</label>
                                <input type="text" class="form-control" name="program_keahlian"required  >
                            </div>
                            
                            <div class="form-group">
                                <label >Kompetensi Keahlian</label>
                                <input type="text" class="form-control" name="kompetensi_keahlian"required  >
                            </div>

                            

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php echo form_close()?>
                </div>
            </div>
            </div>
         


            <?php 
                $no = 1;
                foreach($jurusan as $jrsn) :
            ?>

            <div class="modal fade" id="edit<?=$jrsn['id_jurusan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kompetensi Keahlian (<?=$jrsn['kompetensi_keahlian'] ?>)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open('KompetensiKeahlian/edit/'.$jrsn['id_jurusan'])?>
                            <div class="form-group">
                                <label >Kode Jurusan</label>
                                <input type="number" value="<?=$jrsn['kode_jurusan'] ?>"  class="form-control" name="kode_jurusan"  required >
                            </div>

                            <div class="form-group">
                                <label >Bidang Keahlian</label>
                                <input type="text" value="<?=$jrsn['bidang_keahlian'] ?>" class="form-control" name="bidang_keahlian" required >
                            </div>

                            <div class="form-group">
                                <label >Program Keahlian</label>
                                <input type="text" value="<?=$jrsn['program_keahlian'] ?>" class="form-control" name="program_keahlian"required  >
                            </div>
                            
                            <div class="form-group">
                                <label >Kompetensi Keahlian</label>
                                <input type="text" value="<?=$jrsn['kompetensi_keahlian'] ?>" class="form-control" name="kompetensi_keahlian"required  >
                            </div>

                            

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <?php echo form_close()?>
                </div>
            </div>
            </div>
            <?php endforeach ?>