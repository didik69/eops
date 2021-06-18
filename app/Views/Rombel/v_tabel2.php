<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Rombel</h5>
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
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php $no=1; foreach($kelas as $k) : ?>
                            <li class="nav-item">
                                <a class="nav-link<?= $no == '1' ? ' active' : '' ?>" id="<?= $k['id_kelas'] ?>-tab" data-toggle="tab" href="#<?= $k['id_kelas'] ?>" role="tab" aria-controls="<?= $k['id_kelas'] ?>" aria-selected="<?= $no == '1' ? 'true' : 'false' ?>"><?= $k['nama_kelas'] ?></a>
                            </li>
                            <?php $no++; endforeach ?>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                        <?php $no=1; foreach($kelas as $k) :?>
                            <div class="tab-pane fade<?= $no == '1' ? ' show active' : '' ?>" id="<?= $k['id_kelas'] ?>" role="tabpanel" aria-labelledby="<?= $k['id_kelas'] ?>-tab">
                                <div class="card-body table-border-style">
                                    <div class="table-responsive">
                                        <table class="table table1">
                                            <thead>
                                                
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nik</th>
                                                    <th>Tgl Lahir</th>
                                                    <th>Ket</th>
                                                </tr>
                                            </thead>
                                        
                                            <tbody>
                                            <?php 
                                                // print_r($this->RombelModel->getRombelByKelas($k['id_kelas']));
                                                foreach($siswaaktif as $aktif) :
                                                if($aktif['id_kelas'] == $k['id_kelas']) :
                                                ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $aktif['nama']?></td>
                                                    <td><?= $aktif['nik_siswa']?></td>
                                                    <td><?= $aktif['tgllahir_siswa']?></td>
                                                    <td>
                                                    <a href="#" class="tombol-hapus badge badge-success"><i class="feather icon-eye" data-toggle="modal" onclick="return hapus();"></i></a>
                                                    <a href="<?= base_url()?>/siswaaktif/edit/<?= $aktif['id_siswa'] ?>" class="badge badge-primary"><i class="feather icon-edit"></i></a>
                                                    <a href="#" class="tombol-hapus badge badge-warning"><i class="feather icon-printer" data-toggle="modal" onclick="return hapus();"></i></a>
                                                    <a href="<?= base_url()?>/siswaaktif/delete/<?= $aktif['id_siswa'] ?>"class="tombol-hapus badge badge-danger"><i class="feather icon-trash-2" data-toggle="modal" onclick="return hapus();"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                endif;
                                                endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php $no++; endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ basic-table ] end -->

            <script>
              $(document).ready(function(){
                $(".nav-link").click(function(){
                    alert($("#w3s").attr("aria-controls"));
                });
                    // $('#tampil_data').load("rombel.php");
                    // $('#kelas').bind('change', function () {
                    //     var kelas=$("#kelas").val();
                    //     $.ajax({
                    //         method: 'POST',
                    //         url	: "rombel.php",
                    //         data: {kelas:kelas},
                    //         success	: function(data){
                    //             $('#tampil_data').html(data);
                    //         }
                    //     });
                    // });
              });
            </script>