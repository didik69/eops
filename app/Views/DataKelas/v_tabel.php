<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Kelas</h5>
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
                
                    <!-- <div class="card-header text-right">
                        <a href="" class='btn btn-success btn-sm mr-auto'>Tambah</a>
                    </div> -->
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tingkatan</th>
                                        <th>Jurusan</th>
                                        <th>Nama Kelas</th>
                                        <th>Slug</th>
                                        <th>Wali Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1; foreach($kelas as $kls) : ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $kls['tingkatan'] ?></td>
                                        <td><?= $kls['kompetensi_keahlian'] ?></td>
                                        <td><?= $kls['nama_kelas'] ?></td>
                                        <td><?= $kls['slug'] ?></td>
                                        <td><?= $kls['nama_lengkap'] ?></td>
                                        <td>
                                            <a href="<?= base_url()?>/datakelas/edit/<?= $kls['id_kelas'] ?>" class="tombol-edit badge badge-warning"><i class="feather icon-edit-2" data-toggle="modal" ></i></a>
                                            <a href="<?= base_url()?>/datakelas/delete/<?= $kls['id_kelas'] ?>" class="tombol-hapus badge badge-danger"><i class="feather icon-trash-2" data-toggle="modal" onclick="return hapus();"></i></a>
                                        </td>
                                    </tr>
                                <?php $no++;  endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Tambah">
                            TAMBAH
                        </button>
                    </div>
                </div>
            </div>
            <!-- [ basic-table ] end -->
                <!-- Modal -->
                <div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <?php echo form_open('datakelas/tambah')?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group ">
                                    <label >Tingkatan</label>
                                    <select class="form-control" name="tingkatan">
                                        <option value="">----Pilih Disini----</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>

                                <div class="form-group ">
                                    <label >Jurusan</label>
                                    <select class="form-control" name="id_jurusan">
                                        <option value="">----Pilih Disini----</option>
                                        <?php foreach($kompetensikeahlian as $jurusan) :?>
                                        <option value="<?= $jurusan['id_jurusan'] ?>"><?= $jurusan['kompetensi_keahlian'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="form-group ">
                                    <label >Nama Kelas</label>
                                    <input type="text" class="form-control form-control-sm" name="nama_kelas" required >
                                </div>

                                <div class="form-group ">
                                    <label >Wali Kelas</label>
                                    <select class="form-control" name="id_guru">
                                        <option value="">----Pilih Disini----</option>
                                        <?php foreach($guru as $gru) :?>
                                        <option value="<?= $gru['id_guru'] ?>"><?= $gru['nama_lengkap'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                        <?php echo form_close()?>
                    </div>
                </div>