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
                    <div class="card-body table-border-style">
                        <?php echo form_open('guru/update/'.$guru->id_guru) ?>
                            <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                            <!-- open navbar -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="identitas-tab" data-toggle="tab" href="#identitas" role="tab" aria-controls="identitas" aria-selected="true"><i class="feather icon-edit"></i> IDENTITAS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">DATA PRIBADI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">KEPEGAWAIAN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="kontak-tab" data-toggle="tab" href="#kontak" role="tab" aria-controls="kontak" aria-selected="false">KONTAK</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="penugasan-tab" data-toggle="tab" href="#penugasan" role="tab" aria-controls="penugasan" aria-selected="false">PENUGASAN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tugastambahan-tab" data-toggle="tab" href="#tugastambahan" role="tab" aria-controls="tugastambahan" aria-selected="false">TUGAS TAMBAHAN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pendidikan-tab" data-toggle="tab" href="#pendidikan" role="tab" aria-controls="pendidikan" aria-selected="false">PENDIDIKAN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="sertifikasi-tab" data-toggle="tab" href="#sertifikasi" role="tab" aria-controls="sertifikasi" aria-selected="false">SERTIFIKASI</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <!-- Identitas-->
                                <div class="tab-pane fade show active" id="identitas" role="tabpanel" aria-labelledby="identitas-tab">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                                <div class="col-sm-8">
                                                <input type="text" name= "nama_lengkap" class="form-control" value="<?= $guru->nama_lengkap ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-8">
                                                <input type="text" name= "tempat_lahir"class="form-control" value="<?= $guru->tempat_lahir?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">NIK</label>
                                                <div class="col-sm-8">
                                                <input type="number" name="nik" class="form-control" value="<?= $guru->nik?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-8">
                                                    <input type="date" name="tanggal_lahir" class="form-control" value="<?=$guru->tanggal_lahir?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                        <option value="">----Pilih Di Sini----</option>
                                                        <option value="Laki-laki" <?= $guru->jenis_kelamin == 'Laki-laki' ? 'selected' : '' ?> >Laki-Laki</option>
                                                        <option value="Perempuan" <?= $guru->jenis_kelamin == 'Perempuan' ? 'selected' : '' ?> >Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label"> Nama Ibu Kandung</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="ibu_kandung" class="form-control" value="<?=$guru->ibu_kandung?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- tutup Identitas -->

                                <!-- DATA PRIBADI -->
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Alamat Jln</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="alamat_jalan" class="form-control" value="<?=$guru->alamat_jalan?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Agama</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="agama" id="agama">
                                                        <option value="">----Pilih Di Sini----</option>
                                                        <option value="Islam"<?= $guru->agama=='Islam' ? 'selected': '' ?> >Islam</option>
                                                        <option value="Kristen/Protestan"<?= $guru->agama=='Kristen/Protestan'? 'selected': '' ?>>Kristen/Protestan</option>
                                                        <option value="Katholik"<?= $guru->agama=='Katholik'? 'selected': '' ?>>Katholik</option>
                                                        <option value="Hindu"<?= $guru->agama=='Hindu'? 'selected': '' ?>>Hindu</option>
                                                        <option value="Budha"<?= $guru->agama=='Budha'? 'selected': '' ?>>Budha</option>
                                                        <option value="Khong Hu Cu"<?= $guru->agama=='Khong Hu Cu'? 'selected': '' ?>>Khong Hu Cu</option>
                                                        <option value="Kepercayaan Kpd Tuhan YME"<?= $guru->agama=='Kepercayaan Kpd Tuhan YME'? 'selected': '' ?>>Kepercayaan Kpd Tuhan YME</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Rt</label>
                                                <div class="col-sm-8">
                                                    <input type="number" name="rt" class="form-control" value="<?=$guru->rt?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">NPWP</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="npwp" class="form-control" value="<?=$guru->npwp?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Rw</label>
                                                <div class="col-sm-8">
                                                    <input type="number" name="rw"  class="form-control" value="<?=$guru->rw?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Wajib Pajak</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nama_pajak" class="form-control" value="<?=$guru->nama_pajak?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Dusun</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="dusun" class="form-control" value="<?=$guru->dusun?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="kewarganegaraan" class="form-control" value="<?=$guru->kewarganegaraan?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Desa/kelurahan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="desa" class="form-control" value="<?=$guru->desa?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Status Perkawinan</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="status_perkawinan" id="status_perkawinan">
                                                        <option value="">----Pilih Di Sini----</option>
                                                        <option value="Kawin"<?= $guru->status_perkawinan=='Kawin' ? 'selected': '' ?> >Kawin</option>
                                                        <option value="Belum Kawin"<?= $guru->status_perkawinan=='Belum Kawin'? 'selected': '' ?>>Belum Kawin</option>
                                                        <option value="Janda"<?= $guru->status_perkawinan=='Janda'? 'selected': '' ?>>Janda</option>
                                                        <option value="Duda"<?= $guru->status_perkawinan=='Duda'? 'selected': '' ?>>Duda</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Kecamatan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="kecamatan" class="form-control" value="<?=$guru->kecamatan?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Suami/Istri</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nama_suami_istri" class="form-control" value="<?=$guru->nama_suami_istri?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Kode Pos</label>
                                                <div class="col-sm-8">
                                                    <input type="number" name="kode_pos" class="form-control" value="<?=$guru->kode_pos?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pekerjaan Suami /Istri</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="pekerjaan_suami_istri" id="pekerjaan_suami_istri">
                                                        <option value="">----Pilih Di Sini----</option>
                                                        <option value="Tidak Bekerja"<?= $guru->pekerjaan_suami_istri=='Tidak Bekerja'?  'selected': '' ?> >Tidak Bekerja</option>
                                                        <option value="Nelayan"<?= $guru->pekerjaan_suami_istri=='Nelayan'?  'selected': '' ?>>Nelayan</option>
                                                        <option value="Petani"<?= $guru->pekerjaan_suami_istri=='Petani'?  'selected': '' ?>>Petani</option>
                                                        <option value="Peternak"<?= $guru->pekerjaan_suami_istri=='Peternak'?  'selected': '' ?>>Peternak</option>
                                                        <option value="PNS/TNI/POLRI"<?= $guru->pekerjaan_suami_istri=='PNS/TNI/POLRI'?  'selected': '' ?>>PNS/TNI/POLRI</option>
                                                        <option value="Karyawan Swasta"<?= $guru->pekerjaan_suami_istri=='Karyawan Swasta'?  'selected': '' ?>>Karyawan Swasta</option>
                                                        <option value="Pedagang Kecil"<?= $guru->pekerjaan_suami_istri=='Pedagang Kecil'?  'selected': '' ?>>Pedagang Kecil</option>
                                                        <option value="Pedagang Besar"<?= $guru->pekerjaan_suami_istri=='Pedagang Besar'?  'selected': '' ?>>Pedagang Besar</option>
                                                        <option value="Wiraswasta"<?= $guru->pekerjaan_suami_istri=='Wiraswasta'?  'selected': '' ?>>Wiraswasta</option>
                                                        <option value="Wirausaha"<?= $guru->pekerjaan_suami_istri=='Wirausaha'?  'selected': '' ?>>Wirausaha</option>
                                                        <option value="Buruh"<?= $guru->pekerjaan_suami_istri=='Buruh'?  'selected': '' ?>>Buruh</option>
                                                        <option value="Pensiunan"<?= $guru->pekerjaan_suami_istri=='Pensiunan'?  'selected': '' ?>>Pensiunan</option>
                                                        <option value="Guru Swasta"<?= $guru->pekerjaan_suami_istri=='Guru Swasta'?  'selected': '' ?>>Guru Swasta</option>
                                                        <option value="Sudah Meninggal"<?= $guru->pekerjaan_suami_istri=='Sudah Meninggal'?  'selected': '' ?>>Sudah Meninggal</option>
                                                        <option value="Lain-lain"<?= $guru->pekerjaan_suami_istri=='Lain-lain'?  'selected': '' ?>>Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- TUTUP DATA PRIBADI  -->

                                <!-- KEPEGAWAIAN -->
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Status Kepegawaian</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="status_kepegawaian" id="status_kepegawaian">
                                                        <option value="">----Pilih Di Sini----</option>
                                                        <option value="PNS Diperbantukan" <?= $guru->status_kepegawaian=='PNS Diperbantukan'?  'selected': '' ?>>PNS Diperbantukan</option>
                                                        <option value="GTY/PTY"<?= $guru->status_kepegawaian=='GTY/PTY'?  'selected': '' ?>>GTY/PTY</option>
                                                        <option value="GTT/PTT"<?= $guru->status_kepegawaian=='GTT/PTT'?  'selected': '' ?>>GTT/PTT</option>
                                                        <option value="Guru Honor Sekolah"<?= $guru->status_kepegawaian=='Guru Honor Sekolah'?  'selected': '' ?>>Guru Honor Sekolah</option>
                                                        <option value="Tenaga Honor Sekolah"<?= $guru->status_kepegawaian=='Tenaga Honor Sekolah'?  'selected': '' ?>>Tenaga Honor Sekolah</option>
                                                        <option value="Lain-lain"<?= $guru->status_kepegawaian=='Lain-lain'?  'selected': '' ?>>Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label"> No Sk Pengangkatan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="sk_pengangkatan" class="form-control" value="<?=$guru->sk_pengangkatan?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">NIY/NIGK</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="niy" class="form-control" value="<?=$guru->niy?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">TMT Pengangkatan</label>
                                                <div class="col-sm-8">
                                                    <input type="date" name="tmt_pengangkatan" class="form-control" value="<?=$guru->tmt_pengangkatan?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">NUPTK</label>
                                                <div class="col-sm-8">
                                                    <input type="number" name="nuptk" class="form-control" name="<?=$guru->nuptk?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Lembaga Pengangkat</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="lembaga_pengangkat" id="lembaga_pengangkat">
                                                        <option value="">----Pilih Di Sini----</option>
                                                        <option value="Ketua Yayasan"<?= $guru->lembaga_pengangkat=='Ketua Yayasan'?  'selected': '' ?>>Ketua Yayasan</option>
                                                        <option value="Kepala Sekolah"<?= $guru->lembaga_pengangkat=='Kepala Sekolah'?  'selected': '' ?>>Kepala Sekolah</option>
                                                        <option value="Komite Sekolah"<?= $guru->lembaga_pengangkat=='Komite Sekolah'?  'selected': '' ?>>Komite Sekolah</option>
                                                        <option value="Lain-lain"<?= $guru->lembaga_pengangkat=='Lain-lain'?  'selected': '' ?>>Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Jenis Ptk</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="jenis_ptk" id="jenis_ptk">
                                                        <option value="">----Pilih Di Sini----</option>
                                                        <option value="Guru Mata Pelajaran"<?= $guru->jenis_ptk=='Guru Mata Pelajaran'?  'selected': '' ?>>Guru Mata Pelajaran</option>
                                                        <option value="Guru Bk"<?= $guru->jenis_ptk=='Guru Bk'?  'selected': '' ?>>Guru Bk</option>
                                                        <option value="Tenaga Admninstrasi Sekolah"<?= $guru->jenis_ptk=='Tenaga Admninstrasi Sekolah'?  'selected': '' ?>>Tenaga Admninstrasi Sekolah</option>
                                                        <option value="Kepala Sekolah"<?= $guru->jenis_ptk=='Kepala Sekolah'?  'selected': '' ?>>Kepala Sekolah</option>
                                                        <option value="Lain-lain"<?= $guru->jenis_ptk=='Lain-lain'?  'selected': '' ?>>Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pangkat/Golongan</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="pangkat" id="pangkat">
                                                        <option value="">----Pilih Di Sini----</option>
                                                        <option value="I/a"<?= $guru->pangkat=='I/a'?  'selected': '' ?>>I/a</option>
                                                        <option value="I/b"<?= $guru->pangkat=='I/b'?  'selected': '' ?>>I/b</option>
                                                        <option value="I/c"<?= $guru->pangkat=='I/c'?  'selected': '' ?>>I/c</option>
                                                        <option value="I/d"<?= $guru->pangkat=='I/d'?  'selected': '' ?>>I/d</option>
                                                        <option value="II/a"<?= $guru->pangkat=='II/a'?  'selected': '' ?>>II/a</option>
                                                        <option value="II/b"<?= $guru->pangkat=='II/b'?  'selected': '' ?>>II/b</option>
                                                        <option value="II/c"<?= $guru->pangkat=='II/c'?  'selected': '' ?>>II/c</option>
                                                        <option value="II/d"<?= $guru->pangkat=='II/d'?  'selected': '' ?>>II/d</option>
                                                        <option value="III/a"<?= $guru->pangkat=='III/a'?  'selected': '' ?>>III/a</option>
                                                        <option value="III/b"<?= $guru->pangkat=='III/b'?  'selected': '' ?>>III/b</option>
                                                        <option value="III/c"<?= $guru->pangkat=='III/c'?  'selected': '' ?>>III/c</option>
                                                        <option value="III/d"<?= $guru->pangkat=='III/d'?  'selected': '' ?>>III/d</option>
                                                        <option value="IV/a"<?= $guru->pangkat=='IV/a'?  'selected': '' ?>>IV/a</option>
                                                        <option value="IV/b"<?= $guru->pangkat=='IV/b'?  'selected': '' ?>>IV/b</option>
                                                        <option value="IV/c"<?= $guru->pangkat=='IV/c'?  'selected': '' ?>>IV/c</option>
                                                        <option value="IV/d"<?= $guru->pangkat=='IV/d'?  'selected': '' ?>>IV/d</option>
                                                        <option value="IV/e"<?= $guru->pangkat=='IV/e'?  'selected': '' ?>>IV/e</option>
                                                        <option value="Lain-lain"<?= $guru->pangkat=='Lain-lain'?  'selected': '' ?>>Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- tutup KEPEGAWAIAN -->

                                <!-- penugasan -->
                                <div class="tab-pane fade" id="penugasan" role="tabpanel" aria-labelledby="penugasan-tab">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">No Surat Tugas</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no_surat_tugas" class="form-control" value="<?=$guru->no_surat_tugas?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Status Sekolah Induk</label>
                                                    <div class="col-sm-8">
                                                    <select class="form-control" name="status" id="status_sekolah_induk">
                                                        <option value="">----Pilih Di Sini----</option>
                                                        <option value="PNS Diperbantukan"<?= $guru->status=='PNS Diperbantukan'?  'selected': '' ?>>Ya</option>
                                                        <option value="GTY/PTY"<?= $guru->status=='GTY/PTY'?  'selected': '' ?>>Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Surat Tugas </label>
                                                <div class="col-sm-8">
                                                <input type="date" name="tgl_surat_tugas" class="form-control" value="<?=$guru->tgl_surat_tugas?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Keluar Karena</label>
                                                <div class="col-sm-8">
                                                <input type="text" name="keluar" class="form-control" value="<?=$guru->keluar?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">TMT Tugas </label>
                                                <div class="col-sm-8">
                                                    <input type="date" name="tmt_tugas" class="form-control" value="<?=$guru->tmt_tugas?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Keluar</label>
                                                <div class="col-sm-8">
                                                <input type="date" name="tgl_keluar" class="form-control" value="<?=$guru->tgl_keluar?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close penugasan -->

                                <!-- kontak -->
                                <div class="tab-pane fade" id="kontak" role="tabpanel" aria-labelledby="kontak-tab">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">No HP</label>
                                                <div class="col-sm-8">
                                                    <input type="number" name="no_hp" class="form-control" value="<?=$guru->no_hp?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Username</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="username" class="form-control" value="<?=$guru->username?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="email" class="form-control" value="<?=$guru->email?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pasword</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="pasword" class="form-control" value="<?=$guru->pasword?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Close kontak -->

                                <!-- Tugas Tambahan -->
                                <div class="tab-pane fade" id="tugastambahan" role="tabpanel" aria-labelledby="tugastambahan-tab">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Jabatan PTK</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="jabatan_ptk" class="form-control" value="<?=$guru->jabatan_ptk?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">No Sk Tugas Tambahan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no_sk_tambahan" class="form-control" value="<?=$guru->no_sk_tambahan?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">TMT Tugas Tambahan</label>
                                                <div class="col-sm-8">
                                                    <input type="date" name="tmt_tugas_tambahan" class="form-control" value="<?=$guru->tmt_tugas_tambahan?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">TST Tugas Tambahan</label>
                                                <div class="col-sm-8">
                                                   <input type="date" name="tst_tugas_tambahan" class="form-control" value="<?=$guru->tst_tugas_tambahan?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- close tugas tambahan  -->

                                <!-- riwayat pendidikan -->
                                <div class="tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                                    <table class="table1 table-sm mt-5">
                                        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('sukses') ?>"></div>
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
                                                <th scope="col">Aksi</th>
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
                                                <td>
                                                    <a href="<?= base_url('pendidikan/edit/'.$pdkn['id_pendidikan']) ?>" class="badge badge-primary"><i class="feather icon-edit" data-toggle="modal" data-target="#'] ?>" ></i></a>
                                                    <a href="<?= base_url('pendidikan/delete/'.$pdkn['id_pendidikan']) ?>" class="tombol-hapus badge badge-danger"><i class="feather icon-trash-2" data-toggle="modal" onclick="return hapus();"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        $no = $no+1;
                                        endforeach ?>
                                        </tbody>
                                    </table>
                                    <div class="card-footer text-right">
                                        <a href="" class='btn btn-success btn-sm mr-auto' data-toggle="modal" data-target="#tambah">Tambah Pendidikan</a>
                                    </div>
                                </div>
                                <!-- close riwayat pendidikan -->

                                <!-- riwayat sertifikasi -->
                                <div class="tab-pane fade" id="sertifikasi" role="tabpanel" aria-labelledby="sertifikasi-tab">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Jenis sertifikasi</th>
                                                <th scope="col">Nomor Sertifikasi</th>
                                                <th scope="col">tahun sertifikasi</th>
                                                <th scope="col">bidang studi</th>
                                                <th scope="col">NRG</th>
                                                <th scope="col">No Peserta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="jenis_sertifikasi" class="form-control" value="<?=$guru->jenis_sertifikasi?>" ></td>
                                                <td><input type="text" name="nomor_sertifikasi" class="form-control" value="<?=$guru->nomor_sertifikasi?>" ></td>
                                                <td><input type="text" name="tahun_sertifikasi" class="form-control" value="<?=$guru->tahun_sertifikasi?>" ></td>
                                                <td><input type="text" name="bidang_studi" class="form-control" value="<?=$guru->bidang_studi?>" ></td>
                                                <td><input type="text" name="nrg" class="form-control" value="<?=$guru->nrg?>" ></td>
                                                <td><input type="text" name="nopes" class="form-control" value="<?=$guru->nopes?>" ></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- close riwayat sertifikasi -->
                            </div>
                            <!--close navbar -->
                        <?php echo form_close()?>
                        <!-- close form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ basic-table ] end -->
        <!-- modal tambah pendidikan  -->
        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <?php echo form_open('Pendidikan/tambah')?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Riwayat Pendidikan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id_guru" value="<?= $guru->id_guru ?>">
                        <div class="form-group">
                            <label >Jenjang Pendidikan</label>
                            <select class="form-control" name="jenjang_pendidikan" id="status_sekolah_induk">
                                <option value="">----Pilih Di Sini----</option>
                                <option value="Paud">Paud</option>
                                <option value="TK">TK</option>
                                <option value="SD/MI">SD/MI</option>
                                <option value="SMP/MTs">SMP/MTs</option>
                                <option value="SMA/MA/SMK">SMA/MA/SMK</option>
                                <option value="Kejar Paket A">Kejar Paket A</option>
                                <option value="Kejar Paket B">Kejar Paket B</option>
                                <option value="Kejar Paket C">Kejar Paket C</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label >Bidang Studi</label>
                            <input type="text" class="form-control" name="bidang_studi"  required >
                        </div>

                        <div class="form-group">
                            <label >Gelar Akademik</label>
                            <input type="text" class="form-control" name="gelar_akademik"  required >
                        </div>

                        <div class="form-group">
                            <label>Satuan Pendidikan Formal</label>
                            <input type="text" class="form-control" name="satuan_pendidikan_formal"  required >
                        </div>

                        <div class="form-group">
                            <label >Fakultas/Jurusan</label>
                            <input type="text" class="form-control" name="jurusan"  required >
                        </div>

                        <div class="form-group">
                            <label >Tahun Masuk</label>
                            <input type="number" class="form-control" name="tahun_masuk"  required >
                        </div>

                        <div class="form-group">
                            <label >Tahun Lulus</label>
                            <input type="number" class="form-control" name="tahun_lulus"  required >
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                <?php echo form_close()?>
                </div>
            </div>
        </div>
