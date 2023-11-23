<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br><br>
                    Detail Pinjaman
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $pinjol['Nama Lengkap']; ?></h2>
                    <h6 class="card-subtitle mb-2-muted"><?= $pinjol['email']; ?></h6>
                    <div class="row">
                        <div class="col-md-4">NIK</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pinjol['nik']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Nama Lengkap</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pinjol['nama_lengkap']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pinjol['alamat']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">NO telpon</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pinjol['no_telpon']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">email</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pinjol['email']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Besar Pinjaman</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pinjol['besar_pinjaman']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Durasi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pinjol['durasi']; ?></div>
                    </div>
                    <div class="card-footer justify-content-center">
                        <a href="<?= base_url('Pinjol') ?>"class="btn btn-danger">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>