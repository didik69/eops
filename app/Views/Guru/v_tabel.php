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
        <div class="row">
            <!-- [ basic-table ] start -->
            <div class="col-md-12">
                <div class="card">
                
                    <div class="card-header text-right">
                        <a href="" class='btn btn-success btn-sm mr-auto'data-toggle="modal" data-target="#tambah"></i>Tambah</a>
                    </div>
                    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('sukses') ?>"></div>

                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nik</th>
                                        <th>Nuptk</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tgl Lahir</th>
                                        <th>Ket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($guru as $gru) :?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $gru['nama_lengkap']?></td>
                                        <td><?= $gru['nik']?></td>
                                        <td><?= $gru['nuptk']?></td>
                                        <td><?= $gru['tempat_lahir']?></td>
                                        <td><?= $gru['tanggal_lahir']?></td>
                                        <td>
                                            <a href="<?= base_url()?>/Guru/detail/<?=$gru['id_guru'] ?>" class="tombol-detail badge badge-success"><i class="feather icon-eye"></i></a>
                                            <a href="<?= base_url()?>/Guru/edit/<?= $gru['id_guru'] ?>" class="tombol-edit badge badge-warning"><i class="feather icon-edit-2" data-toggle="modal" ></i></a>
                                            <a href="#" class="tombol-hapus badge badge-primary"><i class="feather icon-printer" data-toggle="modal" ></i></a>
                                            <a href="<?= base_url()?>/guru/delete/<?= $gru['id_guru'] ?>" class="tombol-hapus badge badge-danger"><i class="feather icon-trash-2" data-toggle="modal" onclick="return hapus();"></i></a>
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
<!--modal edit-->

<!-- [ modal edit ] end -->

<div class="modal fade " id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group ">
      <?php echo form_open('guru/tambah')?>
                                <label >Nama Lengkap</label>
                                <input type="text" class="form-control form-control-sm" name="nama_lengkap"  required >
                            </div>

                            <div class="form-group ">
                                <label >NIK</label>
                                <input type="number" class="form-control form-control-sm" name="nik" required >
                            </div>

                            <div class="form-group ">
                                <label >NUPTK</label>
                                <input type="number" class="form-control form-control-sm" name="nuptk"  >
                            </div>
                            
                            <div class="form-group ">
                                <label >Tempat Lahir</label>
                                <input type="text" class="form-control form-control-sm" name="tempat_lahir"required  >
                            </div>

                            <div class="form-group ">
                                <label >Tanggal Lahir</label>
                                <input type="date" class="form-control form-control-sm" name="tanggal_lahir"required  >
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close()?>
    </div>
  </div>
</div>