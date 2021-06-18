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
                    <div class="card-header">
                        <!-- <form action=""> -->
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Pilih Rombel</label>
                            <div class="col-sm-10">
                            <select name="rombel" class="form-control" id="rombel">
                                <option value="">Pilih Rombel</option>
                                <?php foreach($kelas as $k) : ?>
                                <option value="<?= $k['id_kelas'] ?>"><?= $k['nama_kelas'] ?></option>
                                <?php endforeach ?>
                            </select>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                    <div class="card-body table-border-style">
                        <div id="tampil_data"></div>
                    </div>
                </div>
            </div>
            <!-- [ basic-table ] end -->
        <script>
              $(document).ready(function(){
                    $('#tampil_data').load("<?= base_url() ?>/rombel/tampil");
                    $('#rombel').bind('change', function () {
                        var rombel=$("#rombel").val();
                        $.ajax({
                            method: 'POST',
                            url	: "<?= base_url() ?>/rombel/tampil",
                            data: {rombel:rombel},
                            success	: function(data){
                                $('#tampil_data').html(data);
                            }
                        });
                            // console.log(data)
                    });
              });
        </script>