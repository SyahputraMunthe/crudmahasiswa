<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-mb-8">
            <div class="card">
                <div class="card-header justify-content-centet">
                    Form Tambah Data Pinjaman
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Pinjol/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="NIK" class="form-control" id="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="Nama_Lengkap" class="form-control" id="nama_lengkap" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="Alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="no_telpon">No Telpon</label>
                            <input type="text" name="No_Telpon" class="form-control" id="no_telpon" placeholder="NO Hp">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="besar_pinjaman">Besar Pinjaman</label>
                            <input type="text" name="Besar_Pinjaman" class="form-control" id="besar_pinjaman" placeholder="Besar Pinjaman">
                        </div>
                        <div class="form-group">
                            <label for="durasi">Durasi</label>
                            <input type="text" name="Durasi" class="form-control" id="durasi" placeholder="Durasi">
                        </div>
                        <a href="<?= base_url('Pinjol') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Pinjaman</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>