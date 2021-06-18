<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Siswa</h5>
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
                        <a href="" class='btn btn-success btn-sm mr-auto' data-toggle="modal" data-target="#tambah"></i>Tambah Data Siswa</a>
                        <a href="" class='btn btn-danger btn-sm mr-auto' data-toggle="modal" data-target="#upload">Import Data excel</a>
                        <a href="<?= base_url('import/template-import-data-siswa.xls') ?>" class='btn btn-warning btn-sm mr-auto'>Download Template Excel</a>
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
                                        <td><?= $aktif['slug_kelas']?></td>
                                        <td>
                                        <a href="<?= base_url()?>/siswaaktif/detail/<?= $aktif['id_siswa'] ?>" class="badge badge-success"><i class="feather icon-eye" data-toggle="modal"></i></a>
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
<!--modal tambah data-->
<div class="modal fade " id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group ">
         <?php echo form_open('SiswaAktif/tambah')?>
                                <label >Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control form-control-sm" name="nama_lengkap"  required >
                            </div>
                            
                            <div class="form-group ">
                                <label >NIK</label>
                                <input type="number" name="nik_siswa" class="form-control form-control-sm" name="nuptk"  >
                            </div>

                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select name="slug_kelas" class="form-control" id="slug_kelas">
                                    <option value="">----Pilih Disini----</option>
                                    <?php foreach($kelas as $k) : ?>
                                    <option value="<?= $k['slug'] ?>"><?= $k['nama_kelas'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group ">
                                <label >Jenis Kelamin</label>
                                <select class="form-control" name="jk" id="jenis_kelamin">
                                    <option value="">----Pilih Disini----</option>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            
                            <div class="form-group ">
                                <label >Tempat Lahir</label>
                                <input type="text" name="tempatlahir_siswa" class="form-control form-control-sm" name="tempat_lahir"required  >
                            </div>

                            <div class="form-group ">
                                <label >Tanggal Lahir</label>
                                <input type="date" name="tgllahir_siswa" class="form-control form-control-sm" name="tanggal_lahir"required  >
                            </div>
                            <div class="form-group ">
                                <label >Nama Ibu Kandung</label>
                                <input type="text" name="nama_ibu" class="form-control form-control-sm" name="tanggal_lahir"required  >
                            </div>
                            <button type="submit" class="btn btn-primary" >Simpan</button>
                            <?php echo form_close()?>
      </div>
      
    </div>
  </div>
</div>
<!-- [ modal tambah data ] end -->
<!--modal upload data-->
<div class="modal fade " id="upload" tabindex="-1" role="dialog" aria-labelledby="ModalUpload" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalUpload">Upload Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group ">
                    <?php echo form_open_multipart('SiswaAktif/import')?>
                        <div class="form-group">
                            <input type="file" name="file_excel" class="form-control-file" require accept=".xls, .xlsx">
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-sm">Import</button>
                        </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ modal upload data ] end -->
