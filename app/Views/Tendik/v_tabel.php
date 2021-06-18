<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Tendik</h5>
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
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>NIK</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tgl Lahir</th>
                                        <th>Nama Ibu Kandung</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>didik</td>
                                        <td>123456789012</td>
                                        <td>Banyuwangi</td>
                                        <td>01/08/1993</td>
                                        <td>warsiti</td>
                                        <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary  btn-sm  dropdown-toggle" type="button"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href="#" class="dropdown-item  text-dark"><i class="feather icon-eye" ></i> detail</a>
                                                <a href="<?= base_url()?>/tendik/edit" class="dropdown-item text-dark"><i class="feather icon-edit"></i> edit</a>
                                                <a href="#" class="dropdown-item  text-dark"><i class="feather icon-printer" > cetak</i></a>
                                                <a href="#" class="dropdown-item text-dark"><i class="feather icon-trash-2" ></i> hapus</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ basic-table ] end -->
<!-- MOdal tambah  -->
  <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Tendik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group ">

                                <label >Nama Lengkap</label>
                                <input type="text" class="form-control form-control-sm" name="nama_lengkap"  required >
                            </div>

                            <div class="form-group ">
                                <label >NIK</label>
                                <input type="number" class="form-control form-control-sm" name="nik" required >
                            </div>      

                            <div class="form-group ">
                                <label >Tempat Lahir</label>
                                <input type="text" class="form-control form-control-sm" name="tempat_lahir" required  >
                            </div>

                            <div class="form-group ">
                                <label >Tanggal Lahir</label>
                                <input type="date" class="form-control form-control-sm" name="tanggal_lahir" required  >
                            </div>
                            <div class="form-group ">
                                <label >Nama Ibu Kandung</label>
                                <input type="text" class="form-control form-control-sm" name="tanggal_lahir" required  >
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
      </div>      
      </div>
    </div>
  </div>
  </div>
<!-- close modal tambah -->