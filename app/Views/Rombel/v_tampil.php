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
                                                $no = 1;
                                                foreach($siswakelas as $aktif) :
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
                                                $no++;
                                                endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<script>
    $(document).ready( function () {
        $('.table1').DataTable();
    } );
</script>