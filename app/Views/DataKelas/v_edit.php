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
                        <?php if(session()): ?>
                            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('sukses') ?>"></div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo form_open('datakelas/update/'.$kelas->id_kelas)?>
                                    <div class="form-group ">
                                        <label >Tingkatan</label>
                                        <select class="form-control" name="tingkatan">
                                            <option value="">----Pilih Disini----</option>
                                            <option value="X" <?= $kelas->tingkatan == 'X' ? 'selected' : '' ?>>X</option>
                                            <option value="XI" <?= $kelas->tingkatan == 'XI' ? 'selected' : '' ?>>XI</option>
                                            <option value="XII" <?= $kelas->tingkatan == 'XII' ? 'selected' : '' ?>>XII</option>
                                        </select>
                                    </div>

                                    <div class="form-group ">
                                        <label >Jurusan</label>
                                        <select class="form-control" name="id_jurusan">
                                            <option value="">----Pilih Disini----</option>
                                            <?php foreach($kompetensikeahlian as $jurusan) :?>
                                            <option value="<?= $jurusan['id_jurusan'] ?>"<?= $kelas->id_jurusan == $jurusan['id_jurusan'] ? ' selected' : '' ?>><?= $jurusan['kompetensi_keahlian'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                    <div class="form-group ">
                                        <label >Nama Kelas</label>
                                        <input type="text" class="form-control form-control-sm" value="<?= $kelas->nama_kelas ?>" name="nama_kelas" required >
                                    </div>

                                    <div class="form-group ">
                                        <label >Wali Kelas</label>
                                        <select class="form-control" name="id_guru">
                                            <option value="">----Pilih Disini----</option>
                                            <?php foreach($guru as $gru) :?>
                                            <option value="<?= $gru['id_guru'] ?>"<?= $kelas->id_guru == $gru['id_guru'] ? ' selected' : '' ?>><?= $gru['nama_lengkap'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    <a href="<?= base_url('datakelas') ?>" class="btn btn-success btn-sm">Kembali</a>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
