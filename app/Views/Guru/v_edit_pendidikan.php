<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Data Pendidikan Guru</h5>
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
            <!-- [ basic-form ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php echo form_open('pendidikan/update/'.$pendidikan->id_pendidikan) ?>
                        <div class="card-header">
                            <h5>Form Edit Data Pendidikan Guru</h5>
                        </div>
                    <?php //print_r($pendidikan) ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group fill">
                                        <label >Jenjang Pendidikan</label>
                                        <select class="form-control" name="jenjang_pendidikan" id="status_sekolah_induk">
                                            <option value="" <?= $pendidikan->jenjang_pendidikan == '' ? 'selected' : '' ?> >----Pilih Di Sini----</option>
                                            <option value="Paud" <?= $pendidikan->jenjang_pendidikan == 'Paud' ? 'selected' : '' ?> >Paud</option>
                                            <option value="TK" <?= $pendidikan->jenjang_pendidikan == 'TK' ? 'selected' : '' ?> >TK</option>
                                            <option value="SD/MI" <?= $pendidikan->jenjang_pendidikan == 'SD/MI' ? 'selected' : '' ?> >SD/MI</option>
                                            <option value="SMP/MTs" <?= $pendidikan->jenjang_pendidikan == 'SMP/MTs' ? 'selected' : '' ?> >SMP/MTs</option>
                                            <option value="SMA/MA/SMK" <?= $pendidikan->jenjang_pendidikan == 'SMA/MA/SMK' ? 'selected' : '' ?> >SMA/MA/SMK</option>
                                            <option value="Kejar Paket A" <?= $pendidikan->jenjang_pendidikan == 'Kejar Paket A' ? 'selected' : '' ?> >Kejar Paket A</option>
                                            <option value="Kejar Paket B" <?= $pendidikan->jenjang_pendidikan == 'Kejar Paket B' ? 'selected' : '' ?> >Kejar Paket B</option>
                                            <option value="Kejar Paket C" <?= $pendidikan->jenjang_pendidikan == 'Kejar Paket C' ? 'selected' : '' ?> >Kejar Paket C</option>
                                            <option value="D3" <?= $pendidikan->jenjang_pendidikan == 'D3' ? 'selected' : '' ?> >D3</option>
                                            <option value="D4/S1" <?= $pendidikan->jenjang_pendidikan == 'D4/S1' ? 'selected' : '' ?> >D4/S1</option>
                                            <option value="S2" <?= $pendidikan->jenjang_pendidikan == 'S2' ? 'selected' : '' ?> >S2</option>
                                            <option value="S3" <?= $pendidikan->jenjang_pendidikan == 'S3' ? 'selected' : '' ?> >S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group fill">
                                        <label >Bidang Studi</label>
                                        <input type="text" class="form-control" value="<?= $pendidikan->bidang_studi ?>" name="bidang_studi"  required >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group fill">
                                        <label >Gelar Akademik</label>
                                        <input type="text" class="form-control" value="<?= $pendidikan->gelar_akademik ?>" name="gelar_akademik"  required >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group fill">
                                        <label>Satuan Pendidikan Formal</label>
                                        <input type="text" class="form-control" value="<?= $pendidikan->satuan_pendidikan_formal ?>" name="satuan_pendidikan_formal"  required >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group fill">
                                        <label >Fakultas/Jurusan</label>
                                        <input type="text" class="form-control" value="<?= $pendidikan->jurusan ?>" name="jurusan"  required >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group fill">
                                        <label >Tahun Masuk</label>
                                        <input type="number" class="form-control" value="<?= $pendidikan->tahun_masuk ?>" name="tahun_masuk"  required >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group fill">
                                        <label >Tahun Lulus</label>
                                        <input type="number" class="form-control" value="<?= $pendidikan->tahun_lulus ?>" name="tahun_lulus"  required >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <input type="hidden" name="id_guru" value="<?= $pendidikan->id_guru ?>">
                            <a href="<?= base_url('guru/edit/'.$pendidikan->id_guru) ?>" class="btn btn-success">Kembali</a>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </div>
