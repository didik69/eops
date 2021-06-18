<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Elements</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">

            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>UPDATE DATA SEKOLAH</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo form_open_multipart('datasekolah/update/'.$sekolah->id)?>
                                <div class="form-group fill">
                                    <label for="exampleInputEmail1">Nama Sekolah</label>
                                    <input value="<?= $sekolah->nama_sekolah ?>" name="nama_sekolah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        
                                </div>
                                <div class="form-group fill">
                                    <label for="exampleInputPassword1">NPSN</label>
                                    <input value="<?= $sekolah->npsn ?>" name="npsn" type="number" class="form-control" id="exampleInputPassword1" >
                                </div>
                                <div class="form-group fill">
                                    <label for="exampleInputPassword1">Alamat Sekolah</label>
                                    <input value="<?= $sekolah->alamat_sekolah ?>" name="alamat_sekolah" type="text" class="form-control" id="exampleInputPassword1" >
                                </div>
                                <div class="form-group fill">
                                    <label for="exampleInputPassword1">No Tlp</label>
                                    <input value="<?= $sekolah->no_tlpn ?>" name="no_tlpn" type="number" class="form-control" id="exampleInputPassword1" >
                                </div>
                                <div class="form-group fill">
                                    <label for="exampleInputPassword1">Email Sekolah</label>
                                    <input value="<?= $sekolah->email_sekolah ?>" name="email_sekolah" type="text" class="form-control" id="exampleInputPassword1" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group fill">
                                        <label for="exampleFormControlSelect1">Tingkat Pendidikan</label>
                                        <input value="<?= $sekolah->tingkat_pendidikan ?>" name="tingkat_pendidikan" type="text" class="form-control" id="exampleInputPassword1" >
                                    </div> 
                                    <div class="form-group fill">
                                        <label for="exampleInputPassword1">Nama Kepala Sekolah</label>
                                        <input value="<?= $sekolah->nama_kepsek ?>" name="nama_kepsek" type="text" class="form-control" id="exampleInputPassword1" >
                                    </div>
                                    <div class="form-group fill">
                                        <label for="exampleInputPassword1">No Tlp. Kepala Sekolah</label>
                                        <input value="<?= $sekolah->no_tlp_kepsek ?>" name="no_tlp_kepsek" type="number" class="form-control" id="exampleInputPassword1" >
                                    </div>
                                    <div class="form-group fill">
                                        <label for="exampleInputPassword1">Upload Logo Sekolah</label>
                                        <input value="<?= $sekolah->logo ?>" name="logo" type="file" class="form-control" id="exampleInputPassword1" >
                                    </div>
                                   
                                    <button type="submit" class="btn  btn-primary">Submit</button>
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
</section>