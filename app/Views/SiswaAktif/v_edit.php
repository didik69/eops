<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Data Siswa</h5>
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
        <div class="row">
            <!-- [ basic-table ] start -->
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('sukses') ?>"></div>

            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open('SiswaAktif/update/'.$siswa->id_siswa);?>
                    <div class="card-body table-border-style">
                    <div class="text-right">
                            <button class="btn btn-success btn-sm" type="submit"> Simpan </button>
                            <a class="btn btn-warning btn-sm" href="javascript:window.history.go(-1);">Kembali</a>
                            <!-- <a class="btn btn-warning btn-sm" href="<?= base_url('siswaaktif') ?>">Kembali</a> -->
                        </div>
                        <!-- open navbar -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="datapribadi-tab" data-toggle="tab" href="#datapribadi" role="tab" aria-controls="datapribadi" aria-selected="true"><i class="feather icon-user"></i> Data Pribadi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="ayah-tab" data-toggle="tab" href="#ayah" role="tab" aria-controls="ayah" aria-selected="false"><i class="feather icon-users"></i>  AYAH</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="ibu-tab" data-toggle="tab" href="#ibu" role="tab" aria-controls="ibu" aria-selected="false"><i class="feather icon-users"></i> IBU</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="wali-tab" data-toggle="tab" href="#wali" role="tab" aria-controls="wali" aria-selected="false"><i class="feather icon-users"></i> WALI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rincianpd-tab" data-toggle="tab" href="#rincianpd" role="tab" aria-controls="rincianpd" aria-selected="false"><i class="feather icon-edit"></i>  RINCIAN PD</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="regpd-tab" data-toggle="tab" href="#regpd" role="tab" aria-controls="regpd" aria-selected="false"><i class="feather icon-user-check"></i>   REGISTRASI PESERTA DIDIK</a>
                            </li>
                        </ul>
                        <!-- tab konten -->
                        <div class="tab-content mt-5" id="myTabContent">
                            <!-- data pribadi -->
                            <div class="tab-pane fade show active" id="datapribadi" role="tabpanel"     aria-labelledby="datapribadi-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama" class="form-control" value="<?= $siswa->nama ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">RW</label>
                                            <div class="col-sm-8">
                                            <input type="number" name="rw" class="form-control" value="<?= $siswa->rw ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Kelas</label>
                                            <div class="col-sm-8">
                                                <select name="slug_kelas" class="form-control" id="slug_kelas">
                                                    <option value="">----Pilih Disini----</option>
                                                    <?php foreach($kelas as $k) : ?>
                                                    <option value="<?= $k['slug'] ?>"<?= $siswa->slug_kelas == $k['slug'] ? "selected" : '' ?>><?= $k['nama_kelas'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">NO HP</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="nohp" class="form-control" value="<?= $siswa->nohp ?>">
                                            </div>
                                        </div>
                                    </div>   
                                </div>   


                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-8">
                                                    <select class="form-control" name="jk" id="jenis_kelamin">
                                                        <option value="">----Pilih Di Sini----</option>
                                                        <option value="Laki-laki" <?= $siswa->jk == 'Laki-laki' ? 'selected' : '' ?> >Laki-Laki</option>
                                                        <option value="Perempuan" <?= $siswa->jk == 'Perempuan' ? 'selected' : '' ?> >Perempuan</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Dusun</label>
                                            <div class="col-sm-8">
                                            <input type="text" name="dusun" class="form-control" value="<?= $siswa->dusun ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">NISN</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="nisn" class="form-control" value="<?= $siswa->nisn ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Kelurahan/ Desa</label>
                                            <div class="col-sm-8">
                                            <input type="text" name="desa" class="form-control" value="<?= $siswa->desa ?>"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">NIK</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="nik_siswa" class="form-control" value="<?= $siswa->nik_siswa ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Kecamatan</label>
                                            <div class="col-sm-8">
                                            <input type="text" name="kec" class="form-control" value="<?= $siswa->kec ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">No KK</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="no.kk" class="form-control" value="<?= $siswa->no_kk ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Kode Pos</label>
                                            <div class="col-sm-8">
                                            <input type="number" name="kodepos" class="form-control" value="<?= $siswa->kodepos ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="tempatlahir_siswa" class="form-control" value="<?= $siswa->tempatlahir_siswa ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Lintang</label>
                                            <div class="col-sm-8">
                                            <input type="text" name="lintang" class="form-control" value="<?= $siswa->lintang ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-8">
                                                <input type="date" name="tgllahir_siswa" class="form-control" value="<?= $siswa->tgllahir_siswa ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Bujur</label>
                                            <div class="col-sm-8">
                                            <input type="text" name="bujur" class="form-control" value="<?= $siswa->bujur ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">No.Registrasi Akta Lahir</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="noakte_lahir" class="form-control" value="<?= $siswa->noakte_lahir ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tempat Tinggal</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="tempat_tinggal">
                                                <option value="">----Pilih Di Sini----</option>
                                                    <option value="Bersama Orang Tua"<?= $siswa->tempat_tinggal == 'Bersama Orang Tua' ? 'selected' : '' ?>>Bersama Orang Tua</option>
                                                    <option value="Wali"<?= $siswa->tempat_tinggal == 'Wali'?'selected' : '' ?>>Wali</option>
                                                    <option value="Kost"<?= $siswa->tempat_tinggal == 'kost'?'selected' : '' ?>>Kost</option>
                                                    <option value="Asrama"<?= $siswa->tempat_tinggal == 'asrama'?'selected' : '' ?>>Asrama</option>
                                                    <option value="Panti Asuhan"<?= $siswa->tempat_tinggal == 'Panti Asuhan'?'selected' : '' ?>>Panti Asuhan</option>
                                                    <option value="Pesantren"><?= $siswa->tempat_tinggal == 'Pesantren'?'selected' : '' ?>Pesantren</option>
                                                    <option value="Lainya"><?= $siswa->tempat_tinggal == 'Lainya'?'selected' : '' ?>Lainya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Agama</label>
                                            <div class="col-sm-8">
                                                    <select class="form-control" name="agama" id="agama">
                                                        <option value="">----Pilih Di Sini----</option>
                                                        <option value="Islam"<?= $siswa->agama == 'Islam'?'selected' : '' ?>>Islam</option>
                                                        <option value="Kristen/Protestan"<?= $siswa->agama == 'Kristen/protestan'?'selected' : '' ?>>Kristen/Protestan</option>
                                                        <option value="Katholik"<?= $siswa->agama == 'Katholik'?'selected' : '' ?>>Katholik</option>
                                                        <option value="Hindu"<?= $siswa->agama == 'Hindu'?'selected' : '' ?>>Hindu</option>
                                                        <option value="Budha"<?= $siswa->agama == 'Budha'?'selected' : '' ?>>Budha</option>
                                                        <option value="Khong Hu Cu"<?= $siswa->agama == 'Khong Hu Cu'?'selected' : '' ?>>Khong Hu Cu</option>
                                                        <option value="Kepercayaan Kpd Tuhan YME"<?= $siswa->agama == 'Kepercayaan Kpd Tuhan YME'?'selected' : '' ?>>Kepercayaan Kpd Tuhan YME</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Moda Transportasi</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="moda_transportasi">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Jalan Kaki"<?= $siswa->moda_transportasi == 'Jalan Kaki'?'selected' : '' ?>>Jalan Kaki</option>
                                                    <option value="Angkutan umum/bus/pete-pete"<?= $siswa->moda_transportasi == 'Angkutan umum/bus/pete-pete'?'selected' : '' ?>>Angkutan umum/bus/pete-pete</option>
                                                    <option value="Mobil/Bus antar jemput"<?= $siswa->moda_transportasi == 'Mobil/Bus antar jemput'?'selected' : '' ?>>Mobil/Bus antar jemput</option>
                                                    <option value="Kereta Api"<?= $siswa->moda_transportasi == 'Kereta Api'?'selected' : '' ?>>Kereta Api</option>
                                                    <option value="Ojek"<?= $siswa->moda_transportasi == 'Ojek'?'selected' : '' ?>>Ojek</option>
                                                    <option value="Andong/bendi/sado/dokar/delman/becak"<?= $siswa->moda_transportasi == 'Andong/bendi/sado/dokar/delman/becak'?'selected' : '' ?>>Andong/bendi/sado/dokar/delman/becak</option>
                                                    <option value="Perahu penyeberangan/rakit/getek"<?= $siswa->moda_transportasi == 'Perahu penyeberangan/rakit/getek'?'selected' : '' ?>>Perahu penyeberangan/rakit/getek</option>
                                                    <option value="Kuda"<?= $siswa->moda_transportasi == 'Kuda'?'selected' : '' ?>>Kuda</option>
                                                    <option value="Sepeda"<?= $siswa->moda_transportasi == 'Sepeda'?'selected' : '' ?>>Sepeda</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="kewarganegaraan" class="form-control" value="<?= $siswa->kewarganegaraan ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Anak Ke Berapa</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="anak_berapa" class="form-control" value="<?= $siswa->anak_berapa ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Berkebutuhan Khusus</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="berkebutuhankhusus_siswa" >
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Tidak"<?= $siswa->berkebutuhankhusus_siswa == 'Tidak' ? 'selected' : '' ?>>Tidak</option> 
                                                    <option value="Netra"<?= $siswa->berkebutuhankhusus_siswa == 'Netra (A)' ? 'selected' : '' ?> >Netra (A)</option>
                                                    <option value="Rungu"<?= $siswa->berkebutuhankhusus_siswa == 'Rungu (B)' ? 'selected' : '' ?> >Rungu (B)</option>
                                                    <option value="Grahita Ringa"<?= $siswa->berkebutuhankhusus_siswa == 'Grahita Ringan (C)' ? 'selected' : '' ?> >Grahita Ringan (C)</option>
                                                    <option value="Grahita Sedang"<?= $siswa->berkebutuhankhusus_siswa == 'Grahita Sedang (C1)' ? 'selected' : '' ?> >Grahita Sedang (C1)</option>
                                                    <option value="Daksa Ringan"<?= $siswa->berkebutuhankhusus_siswa == 'Daksa Ringan (D)' ? 'selected' : '' ?> >Daksa Ringan (D)</option>
                                                    <option value="Daksa sedang"<?= $siswa->berkebutuhankhusus_siswa == 'Daksa sedang (D1)' ? 'selected' : '' ?> >Daksa sedang (D1)</option> 
                                                    <option value="Wicara"<?= $siswa->berkebutuhankhusus_siswa == 'Wicara (F)' ? 'selected' : '' ?> >Wicara (F)</option> 
                                                    <option value="Tuna Ganda"<?= $siswa->berkebutuhankhusus_siswa == 'Tuna Ganda (G)' ? 'selected' : '' ?> >Tuna Ganda (G)</option> 
                                                    <option value="Hiper Aktif"<?= $siswa->berkebutuhankhusus_siswa == 'Hiper Aktif (H)' ? 'selected' : '' ?> >Hiper Aktif (H)</option> 
                                                    <option value="Cerdas Istimewa"<?= $siswa->berkebutuhankhusus_siswa == 'Cerdas Istimewa (I)' ? 'selected' : '' ?> >Cerdas Istimewa (I)</option> 
                                                    <option value="Bakat Istimewa"<?= $siswa->berkebutuhankhusus_siswa == 'Bakat Istimewa (J)' ? 'selected' : '' ?> >Bakat Istimewa (J)</option> 
                                                    <option value="Kesulitan Belajar"<?= $siswa->berkebutuhankhusus_siswa == 'Kesulitan Belajar (K)' ? 'selected' : '' ?> >Kesulitan Belajar (K)</option> 
                                                    <option value="Indigo"<?= $siswa->berkebutuhankhusus_siswa == 'Indigo (L)' ? 'selected' : '' ?> >Indigo (L)</option> 
                                                    <option value="Down Sindrome"<?= $siswa->berkebutuhankhusus_siswa == 'Down Sindrome (M)' ? 'selected' : '' ?> >Down Sindrome (M)</option> 
                                                    <option value="Autis"<?= $siswa->berkebutuhankhusus_siswa == 'Autis (N)' ? 'selected' : '' ?> >Autis (N)</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Apakah Punya KIP</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="punya_kip" >
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Ya"<?= $siswa->punya_kip == 'Ya' ? 'selected' : '' ?>>Ya</option>
                                                    <option value="Tidak"<?= $siswa->punya_kip == 'Tidak' ? 'selected' : '' ?>>Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Alamat Jalan</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="alamat_siswa" class="form-control" value="<?= $siswa->alamat_siswa ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Apakah Peserta didik Layak Di Usulkan PIP</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="tetepmenerima_pip">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Ya"<?= $siswa->tetepmenerima_pip == 'Ya' ? 'selected' : '' ?>>Ya</option>
                                                    <option value="Tidak"<?= $siswa->tetepmenerima_pip == 'Tidak' ? 'selected' : '' ?>>Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">RT</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="rt" class="form-control" value="<?= $siswa->rt ?>"> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Alasan Menolak Pip</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="menolak_pip">
                                                            <option value="">----Pilih Di Sini----</option>
                                                            <option value="Dilarang Pemda karena menerima bantuan serupa"<?= $siswa->menolak_pip == 'Dilarang Pemda karena menerima bantuan serupa' ? 'selected' : '' ?>>Dilarang Pemda karena menerima bantuan serupa</option>
                                                            <option value="Menolak"<?= $siswa->menolak_pip == 'Menolak' ? 'selected' : '' ?>>Menolak</option>
                                                            <option value="Sudah Mampu"<?= $siswa->menolak_pip == 'Sudah Mampu' ? 'selected' : '' ?>>Sudah Mampu</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                            </div>              
                            <!-- end data pribadi -->

                            <!-- data ayah -->
                            <div class="tab-pane fade" id="ayah" role="tabpanel" aria-labelledby="ayah-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Ayah</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama_ayah" class="form-control" value="<?= $siswa->nama_ayah?>">
                                            </div>
                                    </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="	pekerjaan_ayah">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Tidak Bekerja"<?= $siswa->pekerjaan_ayah == 'Tidak Bekerja' ? 'selected' : '' ?>>Tidak Bekerja</option>
                                                    <option value="Nelayan"<?= $siswa->pekerjaan_ayah == 'Nelayan' ? 'selected' : '' ?>>Nelayan</option>
                                                    <option value="Petani"<?= $siswa->pekerjaan_ayah == 'Petani' ? 'selected' : '' ?>>Petani</option>
                                                    <option value="Peternak"<?= $siswa->pekerjaan_ayah == 'Peternak' ? 'selected' : '' ?>>Peternak</option>
                                                    <option value="PNS/TNI/POLRI"<?= $siswa->pekerjaan_ayah == 'PNS/TNI/POLRI' ? 'selected' : '' ?>>PNS/TNI/POLRI</option>
                                                    <option value="Karyawan Swasta"<?= $siswa->pekerjaan_ayah == 'Karyawan Swasta' ? 'selected' : '' ?>>Karyawan Swasta</option>
                                                    <option value="Pedagang Kecil"<?= $siswa->pekerjaan_ayah == 'Pedagang Kecil' ? 'selected' : '' ?>>Pedagang Kecil</option>
                                                    <option value="Pedagang Besar"<?= $siswa->pekerjaan_ayah == 'Pedagang Besar' ? 'selected' : '' ?>>Pedagang Besar</option>
                                                    <option value="Wiraswasta"<?= $siswa->pekerjaan_ayah == 'Wiraswasta' ? 'selected' : '' ?>>Wiraswasta</option>
                                                    <option value="Wirausaha"<?= $siswa->pekerjaan_ayah == 'Wirausaha' ? 'selected' : '' ?>>Wirausaha</option>
                                                    <option value="Buruh"<?= $siswa->pekerjaan_ayah == 'Buruh' ? 'selected' : '' ?>>Buruh</option>
                                                    <option value="Pensiunan"<?= $siswa->pekerjaan_ayah == 'Pensiunan' ? 'selected' : '' ?>>Pensiunan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">NIK Ayah</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="nik_ayah" class="form-control" value="<?= $siswa->nik_ayah ?>"> 
                                            </div>
                                    </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Penghasilan Bulanan Ayah</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="penghasilan_ayah">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value=" Rp. 500.000"<?= $siswa->penghasilan_ayah == 'Rp. 500.000' ? 'selected' : '' ?>>< Rp. 500.000</option> 
                                                    <option value="Rp. 500.000- Rp. 999.999"<?= $siswa->penghasilan_ayah == 'Rp. 500.000- Rp. 999.999' ? 'selected' : '' ?>>Rp. 500.000- Rp. 999.999</option>
                                                    <option value="Rp. 1.000.000- Rp. 1.999.999"<?= $siswa->penghasilan_ayah == 'Rp. 1.000.000- Rp. 1.999.999' ? 'selected' : '' ?>>Rp. 1.000.000- Rp. 1.999.999</option>
                                                    <option value="Rp. 2.000.000- Rp. 4.999.999"<?= $siswa->penghasilan_ayah == 'Rp. 2.000.000- Rp. 4.999.999' ? 'selected' : '' ?>>Rp. 2.000.000- Rp. 4.999.999</option>
                                                    <option value="Rp. 5.000.000- Rp. 20.000.000"<?= $siswa->penghasilan_ayah == 'Rp. 5.000.000- Rp. 20.000.000' ? 'selected' : '' ?>>Rp. 5.000.000- Rp. 20.000.000</option>
                                                    <option value="Tidak Berpenghasilan"<?= $siswa->penghasilan_ayah == 'Tidak Berpenghasilan' ? 'selected' : '' ?>>Tidak Berpenghasilan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tahun Lahir Ayah</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="tahunlahir_ayah" class="form-control" value="<?= $siswa->tahunlahir_ayah ?>"> 
                                            </div>
                                    </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Berkebutuhan Khusus Ayah</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="berkebutuhankhusus_ayah">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Tidak"<?= $siswa->berkebutuhankhusus_ayah == 'Tidak' ? 'selected' : '' ?>>Tidak</option> 
                                                    <option value="Netra"<?= $siswa->berkebutuhankhusus_ayah == 'Netra (A)' ? 'selected' : '' ?> >Netra (A)</option>
                                                    <option value="Rungu"<?= $siswa->berkebutuhankhusus_ayah == 'Rungu (B)' ? 'selected' : '' ?> >Rungu (B)</option>
                                                    <option value="Grahita Ringa"<?= $siswa->berkebutuhankhusus_ayah == 'Grahita Ringan (C)' ? 'selected' : '' ?> >Grahita Ringan (C)</option>
                                                    <option value="Grahita Sedang"<?= $siswa->berkebutuhankhusus_ayah == 'Grahita Sedang (C1)' ? 'selected' : '' ?> >Grahita Sedang (C1)</option>
                                                    <option value="Daksa Ringan"<?= $siswa->berkebutuhankhusus_ayah == 'Daksa Ringan (D)' ? 'selected' : '' ?> >Daksa Ringan (D)</option>
                                                    <option value="Daksa sedang"<?= $siswa->berkebutuhankhusus_ayah == 'Daksa sedang (D1)' ? 'selected' : '' ?> >Daksa sedang (D1)</option> 
                                                    <option value="Wicara"<?= $siswa->berkebutuhankhusus_ayah == 'Wicara (F)' ? 'selected' : '' ?> >Wicara (F)</option> 
                                                    <option value="Tuna Ganda"<?= $siswa->berkebutuhankhusus_ayah == 'Tuna Ganda (G)' ? 'selected' : '' ?> >Tuna Ganda (G)</option> 
                                                    <option value="Hiper Aktif"<?= $siswa->berkebutuhankhusus_ayah == 'Hiper Aktif (H)' ? 'selected' : '' ?> >Hiper Aktif (H)</option> 
                                                    <option value="Cerdas Istimewa"<?= $siswa->berkebutuhankhusus_ayah == 'Cerdas Istimewa (I)' ? 'selected' : '' ?> >Cerdas Istimewa (I)</option> 
                                                    <option value="Bakat Istimewa"<?= $siswa->berkebutuhankhusus_ayah == 'Bakat Istimewa (J)' ? 'selected' : '' ?> >Bakat Istimewa (J)</option> 
                                                    <option value="Kesulitan Belajar"<?= $siswa->berkebutuhankhusus_ayah == 'Kesulitan Belajar (K)' ? 'selected' : '' ?> >Kesulitan Belajar (K)</option> 
                                                    <option value="Indigo"<?= $siswa->berkebutuhankhusus_ayah == 'Indigo (L)' ? 'selected' : '' ?> >Indigo (L)</option> 
                                                    <option value="Down Sindrome"<?= $siswa->berkebutuhankhusus_ayah == 'Down Sindrome (M)' ? 'selected' : '' ?> >Down Sindrome (M)</option> 
                                                    <option value="Autis"<?= $siswa->berkebutuhankhusus_ayah == 'Autis (N)' ? 'selected' : '' ?> >Autis (N)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Pendidikan Ayah</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="pendidikan_ayah">
                                                    <option value="">----Pilih Di Sini----</option>  
                                                    <option value="Tidak Sekolah"<?= $siswa->pendidikan_ayah == 'Tidak Sekolah' ? 'selected' : '' ?>>Tidak Sekolah</option> 
                                                    <option value="Putus SD"<?= $siswa->pendidikan_ayah == 'Putus SD' ? 'selected' : '' ?>>Putus SD</option>  
                                                    <option value="SD"<?= $siswa->pendidikan_ayah == 'SD' ? 'selected' : '' ?>>SD Sederajat</option>
                                                    <option value="SMP"<?= $siswa->pendidikan_ayah == 'SMP' ? 'selected' : '' ?>>SMP Sederajat</option>
                                                    <option value="SMA"<?= $siswa->pendidikan_ayah == 'SMA' ? 'selected' : '' ?>>SMA Sederajat</option> 
                                                    <option value="D1"<?= $siswa->pendidikan_ayah == 'D1' ? 'selected' : '' ?>>D1</option> 
                                                    <option value="D2"<?= $siswa->pendidikan_ayah == 'D2' ? 'selected' : '' ?>>D2</option> 
                                                    <option value="D3"<?= $siswa->pendidikan_ayah == 'D3' ? 'selected' : '' ?>>D3</option>
                                                    <option value="D4"<?= $siswa->pendidikan_ayah == 'D4' ? 'selected' : '' ?>>D4/S1</option> 
                                                    <option value="S2"<?= $siswa->pendidikan_ayah == 'S2' ? 'selected' : '' ?>>S2</option> 
                                                    <option value="S3"<?= $siswa->pendidikan_ayah == 'S3' ? 'selected' : '' ?>>S3</option>    
                                                </select> 
                                            </div>
                                    </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end data ayah -->
                            <!-- data ibu -->
                            <div class="tab-pane fade" id="ibu" role="tabpanel" aria-labelledby="ibu-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Ibu</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama_ibu" class="form-control" value="<?= $siswa->nama_ibu ?>">
                                            </div>
                                    </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="pekerjaan_ibu">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Tidak Bekerja"<?= $siswa->pekerjaan_ibu == 'Tidak Bekerja' ? 'selected' : '' ?>>Tidak Bekerja</option>
                                                    <option value="Nelayan"<?= $siswa->pekerjaan_ibu == 'Nelayan' ? 'selected' : '' ?>>Nelayan</option>
                                                    <option value="Petani"<?= $siswa->pekerjaan_ibu == 'Petani' ? 'selected' : '' ?>>Petani</option>
                                                    <option value="Peternak"<?= $siswa->pekerjaan_ibu == 'Peternak' ? 'selected' : '' ?>>Peternak</option>
                                                    <option value="PNS/TNI/POLRI"<?= $siswa->pekerjaan_ibu == 'PNS/TNI/POLRI' ? 'selected' : '' ?>>PNS/TNI/POLRI</option>
                                                    <option value="Karyawan Swasta"<?= $siswa->pekerjaan_ibu == 'Karyawan Swasta' ? 'selected' : '' ?>>Karyawan Swasta</option>
                                                    <option value="Pedagang Kecil"<?= $siswa->pekerjaan_ibu == 'Pedagang Kecil' ? 'selected' : '' ?>>Pedagang Kecil</option>
                                                    <option value="Pedagang Besar"<?= $siswa->pekerjaan_ibu == 'Pedagang Besar' ? 'selected' : '' ?>>Pedagang Besar</option>
                                                    <option value="Wiraswasta"<?= $siswa->pekerjaan_ibu == 'Wiraswasta' ? 'selected' : '' ?>>Wiraswasta</option>
                                                    <option value="Wirausaha"<?= $siswa->pekerjaan_ibu == 'Wirausaha' ? 'selected' : '' ?>>Wirausaha</option>
                                                    <option value="Buruh"<?= $siswa->pekerjaan_ibu == 'Buruh' ? 'selected' : '' ?>>Buruh</option>
                                                    <option value="Pensiunan"<?= $siswa->pekerjaan_ibu == 'Pensiunan' ? 'selected' : '' ?>>Pensiunan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">NIK Ibu</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="nik_ibu" class="form-control" value="<?= $siswa->nik_ibu ?>">
                                            </div>
                                    </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Penghasilan Bulanan Ibu</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="penghasilan_ibu" >
                                                <option value="">----Pilih Di Sini----</option>
                                                    <option value=" Rp. 500.000"<?= $siswa->penghasilan_ibu == 'Rp. 500.000' ? 'selected' : '' ?>>< Rp. 500.000</option> 
                                                    <option value="Rp. 500.000- Rp. 999.999"<?= $siswa->penghasilan_ibu == 'Rp. 500.000- Rp. 999.999' ? 'selected' : '' ?>>Rp. 500.000- Rp. 999.999</option>
                                                    <option value="Rp. 1.000.000- Rp. 1.999.999"<?= $siswa->penghasilan_ibu == 'Rp. 1.000.000- Rp. 1.999.999' ? 'selected' : '' ?>>Rp. 1.000.000- Rp. 1.999.999</option>
                                                    <option value="Rp. 2.000.000- Rp. 4.999.999"<?= $siswa->penghasilan_ibu == 'Rp. 2.000.000- Rp. 4.999.999' ? 'selected' : '' ?>>Rp. 2.000.000- Rp. 4.999.999</option>
                                                    <option value="Rp. 5.000.000- Rp. 20.000.000"<?= $siswa->penghasilan_ibu == 'Rp. 5.000.000- Rp. 20.000.000' ? 'selected' : '' ?>>Rp. 5.000.000- Rp. 20.000.000</option>
                                                    <option value="Tidak Berpenghasilan"<?= $siswa->penghasilan_ibu == 'Tidak Berpenghasilan' ? 'selected' : '' ?>>Tidak Berpenghasilan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tahun Lahir Ibu</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="tahunlahir_ibu" class="form-control" value="<?= $siswa->tahunlahir_ibu ?>"> 
                                            </div>
                                    </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Berkebutuhan Khusus Ibu</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="berkebutuhankhusus_ibu" >
                                                <option value="">----Pilih Di Sini----</option>
                                                <option value="Tidak"<?= $siswa->berkebutuhankhusus_ibu == 'Tidak' ? 'selected' : '' ?>>Tidak</option> 
                                                    <option value="Netra"<?= $siswa->berkebutuhankhusus_ibu == 'Netra (A)' ? 'selected' : '' ?> >Netra (A)</option>
                                                    <option value="Rungu"<?= $siswa->berkebutuhankhusus_ibu == 'Rungu (B)' ? 'selected' : '' ?> >Rungu (B)</option>
                                                    <option value="Grahita Ringa"<?= $siswa->berkebutuhankhusus_ibu == 'Grahita Ringan (C)' ? 'selected' : '' ?> >Grahita Ringan (C)</option>
                                                    <option value="Grahita Sedang"<?= $siswa->berkebutuhankhusus_ibu == 'Grahita Sedang (C1)' ? 'selected' : '' ?> >Grahita Sedang (C1)</option>
                                                    <option value="Daksa Ringan"<?= $siswa->berkebutuhankhusus_ibu == 'Daksa Ringan (D)' ? 'selected' : '' ?> >Daksa Ringan (D)</option>
                                                    <option value="Daksa sedang"<?= $siswa->berkebutuhankhusus_ibu == 'Daksa sedang (D1)' ? 'selected' : '' ?> >Daksa sedang (D1)</option> 
                                                    <option value="Wicara"<?= $siswa->berkebutuhankhusus_ibu == 'Wicara (F)' ? 'selected' : '' ?> >Wicara (F)</option> 
                                                    <option value="Tuna Ganda"<?= $siswa->berkebutuhankhusus_ibu == 'Tuna Ganda (G)' ? 'selected' : '' ?> >Tuna Ganda (G)</option> 
                                                    <option value="Hiper Aktif"<?= $siswa->berkebutuhankhusus_ibu == 'Hiper Aktif (H)' ? 'selected' : '' ?> >Hiper Aktif (H)</option> 
                                                    <option value="Cerdas Istimewa"<?= $siswa->berkebutuhankhusus_ibu == 'Cerdas Istimewa (I)' ? 'selected' : '' ?> >Cerdas Istimewa (I)</option> 
                                                    <option value="Bakat Istimewa"<?= $siswa->berkebutuhankhusus_ibu == 'Bakat Istimewa (J)' ? 'selected' : '' ?> >Bakat Istimewa (J)</option> 
                                                    <option value="Kesulitan Belajar"<?= $siswa->berkebutuhankhusus_ibu == 'Kesulitan Belajar (K)' ? 'selected' : '' ?> >Kesulitan Belajar (K)</option> 
                                                    <option value="Indigo"<?= $siswa->berkebutuhankhusus_ibu == 'Indigo (L)' ? 'selected' : '' ?> >Indigo (L)</option> 
                                                    <option value="Down Sindrome"<?= $siswa->berkebutuhankhusus_ibu == 'Down Sindrome (M)' ? 'selected' : '' ?> >Down Sindrome (M)</option> 
                                                    <option value="Autis"<?= $siswa->berkebutuhankhusus_ibu == 'Autis (N)' ? 'selected' : '' ?> >Autis (N)</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Pendidikan Ibu</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="	pendidikan_ibu">  
                                                <option value="">----Pilih Di Sini----</option>  
                                                    <option value="Tidak Sekolah"<?= $siswa->pendidikan_ibu == 'Tidak Sekolah' ? 'selected' : '' ?>>Tidak Sekolah</option> 
                                                    <option value="Putus SD"<?= $siswa->pendidikan_ibu == 'Putus SD' ? 'selected' : '' ?>>Putus SD</option>  
                                                    <option value="SD"<?= $siswa->pendidikan_ibu == 'SD' ? 'selected' : '' ?>>SD Sederajat</option>
                                                    <option value="SMP"<?= $siswa->pendidikan_ibu == 'SMP' ? 'selected' : '' ?>>SMP Sederajat</option>
                                                    <option value="SMA"<?= $siswa->pendidikan_ibu == 'SMA' ? 'selected' : '' ?>>SMA Sederajat</option> 
                                                    <option value="D1"<?= $siswa->pendidikan_ibu == 'D1' ? 'selected' : '' ?>>D1</option> 
                                                    <option value="D2"<?= $siswa->pendidikan_ibu == 'D2' ? 'selected' : '' ?>>D2</option> 
                                                    <option value="D3"<?= $siswa->pendidikan_ibu == 'D3' ? 'selected' : '' ?>>D3</option>
                                                    <option value="D4"<?= $siswa->pendidikan_ibu == 'D4' ? 'selected' : '' ?>>D4/S1</option> 
                                                    <option value="S2"<?= $siswa->pendidikan_ibu == 'S2' ? 'selected' : '' ?>>S2</option> 
                                                    <option value="S3"<?= $siswa->pendidikan_ibu == 'S3' ? 'selected' : '' ?>>S3</option>  
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end data ibu -->

                            <!-- data wali  -->
                            <div class="tab-pane fade" id="wali" role="tabpanel" aria-labelledby="wali-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Wali</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama_wali" class="form-control" value="<?= $siswa->nama_wali ?>"> 
                                            </div>
                                    </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Pendidikan Wali</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="pendidikan_wali">  
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Tidak Sekolah"<?= $siswa->pendidikan_wali == 'Tidak Sekolah' ? 'selected' : '' ?>>Tidak Sekolah</option> 
                                                    <option value="Putus SD"<?= $siswa->pendidikan_wali == 'Putus SD' ? 'selected' : '' ?>>Putus SD</option>  
                                                    <option value="SD"<?= $siswa->pendidikan_wali == 'SD' ? 'selected' : '' ?>>SD Sederajat</option>
                                                    <option value="SMP"<?= $siswa->pendidikan_wali == 'SMP' ? 'selected' : '' ?>>SMP Sederajat</option>
                                                    <option value="SMA"<?= $siswa->pendidikan_wali == 'SMA' ? 'selected' : '' ?>>SMA Sederajat</option> 
                                                    <option value="D1"<?= $siswa->pendidikan_wali == 'D1' ? 'selected' : '' ?>>D1</option> 
                                                    <option value="D2"<?= $siswa->pendidikan_wali == 'D2' ? 'selected' : '' ?>>D2</option> 
                                                    <option value="D3"<?= $siswa->pendidikan_wali == 'D3' ? 'selected' : '' ?>>D3</option>
                                                    <option value="D4"<?= $siswa->pendidikan_wali == 'D4' ? 'selected' : '' ?>>D4/S1</option> 
                                                    <option value="S2"<?= $siswa->pendidikan_wali == 'S2' ? 'selected' : '' ?>>S2</option> 
                                                    <option value="S3"<?= $siswa->pendidikan_wali == 'S3' ? 'selected' : '' ?>>S3</option>  
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">NIK Wali</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="nik_wali" class="form-control" value="<?= $siswa->nik_wali ?>">
                                            </div>
                                    </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Pekerjaan Wali</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="pekerjaan_wali">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Tidak Bekerja"<?= $siswa->pekerjaan_wali == 'Tidak Bekerja' ? 'selected' : '' ?>>Tidak Bekerja</option>
                                                    <option value="Nelayan"<?= $siswa->pekerjaan_wali == 'Nelayan' ? 'selected' : '' ?>>Nelayan</option>
                                                    <option value="Petani"<?= $siswa->pekerjaan_wali == 'Petani' ? 'selected' : '' ?>>Petani</option>
                                                    <option value="Peternak"<?= $siswa->pekerjaan_wali == 'Peternak' ? 'selected' : '' ?>>Peternak</option>
                                                    <option value="PNS/TNI/POLRI"<?= $siswa->pekerjaan_wali == 'PNS/TNI/POLRI' ? 'selected' : '' ?>>PNS/TNI/POLRI</option>
                                                    <option value="Karyawan Swasta"<?= $siswa->pekerjaan_wali == 'Karyawan Swasta' ? 'selected' : '' ?>>Karyawan Swasta</option>
                                                    <option value="Pedagang Kecil"<?= $siswa->pekerjaan_wali == 'Pedagang Kecil' ? 'selected' : '' ?>>Pedagang Kecil</option>
                                                    <option value="Pedagang Besar"<?= $siswa->pekerjaan_wali == 'Pedagang Besar' ? 'selected' : '' ?>>Pedagang Besar</option>
                                                    <option value="Wiraswasta"<?= $siswa->pekerjaan_wali == 'Wiraswasta' ? 'selected' : '' ?>>Wiraswasta</option>
                                                    <option value="Wirausaha"<?= $siswa->pekerjaan_wali == 'Wirausaha' ? 'selected' : '' ?>>Wirausaha</option>
                                                    <option value="Buruh"<?= $siswa->pekerjaan_wali == 'Buruh' ? 'selected' : '' ?>>Buruh</option>
                                                    <option value="Pensiunan"<?= $siswa->pekerjaan_wali == 'Pensiunan' ? 'selected' : '' ?>>Pensiunan</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tahun Lahir Wali</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="tahunlahir_wali" class="form-control" value="<?= $siswa->tahunlahir_wali ?>"> 
                                            </div>
                                    </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Penghasilan Bulanan</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="penghasilan_wali">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value=" Rp. 500.000"<?= $siswa->penghasilan_wali == 'Rp. 500.000' ? 'selected' : '' ?>>< Rp. 500.000</option> 
                                                    <option value="Rp. 500.000- Rp. 999.999"<?= $siswa->penghasilan_wali == 'Rp. 500.000- Rp. 999.999' ? 'selected' : '' ?>>Rp. 500.000- Rp. 999.999</option>
                                                    <option value="Rp. 1.000.000- Rp. 1.999.999"<?= $siswa->penghasilan_wali == 'Rp. 1.000.000- Rp. 1.999.999' ? 'selected' : '' ?>>Rp. 1.000.000- Rp. 1.999.999</option>
                                                    <option value="Rp. 2.000.000- Rp. 4.999.999"<?= $siswa->penghasilan_wali == 'Rp. 2.000.000- Rp. 4.999.999' ? 'selected' : '' ?>>Rp. 2.000.000- Rp. 4.999.999</option>
                                                    <option value="Rp. 5.000.000- Rp. 20.000.000"<?= $siswa->penghasilan_wali == 'Rp. 5.000.000- Rp. 20.000.000' ? 'selected' : '' ?>>Rp. 5.000.000- Rp. 20.000.000</option>
                                                    <option value="Tidak Berpenghasilan"<?= $siswa->penghasilan_wali == 'Tidak Berpenghasilan' ? 'selected' : '' ?>>Tidak Berpenghasilan</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end data wali  -->

                            <!-- Rincian PD  -->
                            <div class="tab-pane fade" id="rincianpd" role="tabpanel" aria-labelledby="rincianpd-tab">
                                <div class="card">
                                    <div class="card-header bg-secondary">
                                    <h5 class="card-title text-light">DATA PERIODIK</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Tinggi Badan (CM)</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="tinggi_badan" class="form-control" value="<?= $siswa->tinggi_badan ?>"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Sebutkan (dlm KM)</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" name="sebutkan" class="form-control" value="<?= $siswa->sebutkan?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Berat Badan (KG)</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="berat_badan" class="form-control" value="<?= $siswa->berat_badan ?>"> 
                                                        </div>
                                                </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Waktu Tempuh ke Sekolah (jam/menit)</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" name="waktu_tempuh" class="form-control" value="<?= $siswa->waktu_tempuh ?>"> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Lingkar Kepala (CM) </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="lingkar_kepala" class="form-control" value="<?= $siswa->lingkar_kepala ?>"> 
                                                        </div>
                                                </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Jumlah Saudara Kandung</label>
                                                        <div class="col-sm-8">
                                                        <input type="number" name="jumlah_saudara" class="form-control" value="<?= $siswa->jumlah_saudara ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Jarak Tempat Tinggal ke Sekolah</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="jarak" class="form-control" value="<?= $siswa->jarak ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end rincian pd  -->

                            <!-- registrasi peserta didik  -->
                            <div class="tab-pane fade" id="regpd" role="tabpanel" aria-labelledby="regpd-tab">
                                <div class="card">
                                    <div class="card-header bg-secondary">
                                        <h5 class="card-title text-light">Pendaftaran Masuk</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                                            <div class="col-sm-10">
                                            <select class="form-control" name="	jenis_pendaftaran">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Siswa Baru">Siswa Baru</option>
                                                    <option value="Pindahan">Pindahan</option>
                                                    <option value="Kembali Bersekolah">Kembali Bersekolah</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">No Induk PD/NIS</label>
                                            <div class="col-sm-10">
                                            <input type="text" name="no_induk" class="form-control" value="<?= $siswa->no_induk ?>"> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                                            <div class="col-sm-10">
                                            <input type="date" name="tgl_masuksekolah" class="form-control" value="<?= $siswa->tgl_masuksekolah?>"> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="id_kompetensi_keahlian">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <?php foreach($kompetensi_keahlian as $jurusan) : ?>
                                                    <option value="<?php echo $jurusan['id_jurusan']?>" <?= $siswa->id_kompetensi_keahlian == $jurusan['id_jurusan'] ? 'selected' : '' ?> ><?php echo $jurusan['kompetensi_keahlian']?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Sekolah Asal</label>
                                            <div class="col-sm-10">
                                            <input type="text" name="sekolah_asal" class="form-control" value="<?= $siswa->sekolah_asal?>"> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Tingkat Kelas Saat Ini</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="tingkat_kelas">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="X">X</option>
                                                    <option value="XI">XI</option>
                                                    <option value="XII">XII</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Apakah Pernah PAUD Formal (TK)</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="pernah_paud">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Apakah Pernah Paud Non Formal (KB/TPA/SPS)</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="pernahpaud_nonformal">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Hobby</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="hobi">
                                                    <option value="">----Pilih Di Sini----</option>
                                                        <option  value="Olahraga">Olahraga</option>
                                                        <option  value="Kesenian">Kesenian</option>
                                                        <option  value="Membaca">Membaca</option>
                                                        <option  value="Menulis">Menulis</option>
                                                        <option  value="Travelling">Travelling</option>
                                                        <option  value="Fotografi">Fotografi</option>
                                                        <option  value="Fitnes">Fitnes</option>
                                                        <option  value="Belanja">Belanja</option>
                                                        <option  value="Menggambar">Menggambar </option>
                                                        <option  value="Bermain musik">Bermain musik </option>
                                                        <option  value="Mendaki">Mendaki</option>
                                                        <option  value="Jogging">Jogging</option>
                                                        <option  value="Bermain Gitar">Bermain Gitar</option>
                                                        <option  value="Bermain Bola">Bermain Bola</option>
                                                        <option  value="Bermain Bulutangkis">Bermain Bulutangkis</option>
                                                        <option  value="Bermain Bola Tenis">Bermain Bola Tenis</option>
                                                        <option  value="Bermain Biola">Bermain Biola</option>
                                                        <option  value="Bermain Piano">Bermain Piano</option>
                                                        <option  value="Bermain Gitar">Bermain Gitar</option>
                                                        <option  value="Bermain Boneka">Bermain Boneka</option>
                                                        <option  value="Berlari">Berlari</option>
                                                        <option  value="Berkemah">Berkemah</option>
                                                        <option  value="Memancing">Memancing</option>
                                                        <option  value="Berselancar">Berselancar</option>
                                                        <option  value="Makan">Makan</option>
                                                        <option  value="Menjahit">Menjahit</option>
                                                        <option  value="Main Puzzle">Main Puzzle</option>
                                                        <option  value="Mewarnai">Mewarnai</option>
                                                        <option  value="Lainya">Lainya</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Cita-Cita</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="cita">
                                                    <option value="">----Pilih Di Sini----</option>
                                                        <option value="PNS">PNS</option>
                                                        <option value="TNI / Polri">TNI / Polri</option>
                                                        <option value="Guru/Dosen">Guru/Dosen</option>
                                                        <option value="Dokter">Dokter</option>
                                                        <option value="Politikus">Politikus</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                        <option value="Seni / Lukis / Artis / Sejenis">Seni / Lukis / Artis / Sejenis</option>
                                                        <option value="Penghafal Al-Qur'an">Penghafal Al-Qur'an</option>
                                                        <option value="Atlet E-Sport Profesional">Atlet E-Sport Profesional</option>
                                                        <option value="Atlet">Atlet</option>
                                                        <option value="Content Creator">Content Creator</option>
                                                        <option value="Vloger">Vloger</option>
                                                        <option value="Koki">Koki</option>
                                                        <option value="Pendeta">Pendeta</option>
                                                        <option value="Perawat">Perawat</option>
                                                        <option value="Pilot">Pilot</option>
                                                        <option value="Pembalap">Pembalap</option>
                                                        <option value="Atlit Olahraga">Atlit Olahraga</option>
                                                        <option value="Pengacara">Pengacara</option>
                                                        <option value="Da'i / Ustadz">Da'i / Ustadz</option>
                                                        <option value="Entertainer/Pekerja Seni">Entertainer/Pekerja Seni</option>
                                                        <option value="Wartawan">Wartawan</option>
                                                        <option value="Pengusaha / Bisnisme">Pengusaha / Bisnismen</option>
                                                        <option value="Penulis">Penulis</option>
                                                        <option value="Penyiar Radio">Penyiar Radio</option>
                                                        <option value="Pembawa Acara / Master Ceremony">Pembawa Acara / Master Ceremony</option>
                                                        <option value="Pemadam Kebakaran">Pemadam Kebakaran</option>
                                                        <option value="Astronot">Astronot</option>
                                                        <option value="Masinis Kereta Api">Masinis Kereta Api</option>
                                                        <option value="Perawat / Suster">Perawat / Suster</option>
                                                        <option value="Bidan">Bidan</option>
                                                        <option value="Presiden">Presiden</option>
                                                        <option value="Translator">Translator</option>
                                                        <option value="Designer">Designer</option>
                                                        <option value="Pelaut">Pelaut</option>
                                                        <option value="Arsitek">Arsitek</option>
                                                        <option value="Lainya">Lainya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <div class="card">
                                    <div class="card-header bg-secondary">
                                        <h5 class="card-title text-light">Pendaftaran Ujian Nasional Sekolah Menengah</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">No Peserta UN SMP/Mts</label>
                                            <div class="col-sm-10">
                                            <input type="text" name="nopeserta_un" class="form-control" value="<?= $siswa->nopeserta_un ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">No Seri Ijazah SMP/MTs</label>
                                            <div class="col-sm-10">
                                            <input type="text" name="no_ijazah" class="form-control" value="<?= $siswa->no_ijazah ?>"> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">No SKHUN SMP/MTS</label>
                                            <div class="col-sm-10">
                                            <input type="text" name="no_skhun" class="form-control" value="<?= $siswa->no_skhun ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>    

                                <div class="card">
                                    <div class="card-header bg-secondary">
                                        <h5 class="card-title text-light">Pendaftaran Keluar ( Di isi Jika Peserta Didik Keluar)</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Keluar Karena</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="keluar">
                                                    <option value="">----Pilih Di Sini----</option>
                                                    <option value="">Mutasi</option>
                                                    <option value="">Di Keluarkan</option>
                                                    <option value="">Mengundurkan Diri</option>
                                                    <option value="">Putus Sekolah</option>
                                                    <option value="">Wafat</option>
                                                    <option value="">Hilang</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Keluar Sekolah</label>
                                            <div class="col-sm-10">
                                            <input type="date" name="tgl_keluar" class="form-control" value="<?= $siswa->tgl_keluar ?>"> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Alasan</label>
                                            <div class="col-sm-10">
                                            <input type="text" name="alasan" class="form-control" value="<?= $siswa->alasan ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <!-- end registrasi pd  -->
                        </div>
                        <!-- end tab konten -->
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>


                                    