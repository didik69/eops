<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="card col-md-6">
            <div class="card-body">
                <div class="col-md-12">
                    <?php echo form_open('login/auth')?>
                        <div class="form-group fill">
                            <label for="">Username</label>
                            <input name="username" type="text" class="form-control" id="" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group fill">
                            <label for="">Password</label>
                            <input name="password" type="password" class="form-control" id="" >
                        </div>
                        <button class="btn btn-primary" type="submit">Login</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
        <div class="card col-md-6">
            <div class="card-body">
                <div class="col-md-12">
                    <?php echo form_open('login/auth_wali')?>
                        <div class="form-group fill">
                            <label for="">Username</label>
                            <input name="username" type="text" class="form-control" id="" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group fill">
                            <label for="">Password</label>
                            <input name="password" type="password" class="form-control" id="" >
                        </div>
                        <button class="btn btn-primary" type="submit">Login</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->