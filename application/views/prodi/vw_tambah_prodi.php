<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-mb-8">
            <div class="card">
                <div class="card-header justify-content-centet">
                    Form Tambah Prodi
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Prodi/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Prodi"><br>
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Ruangan"><br>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option value="">jurusan</option>
                                <option value="JTI">JTI</option>
                                <option value="JTA">Teknik Industri</option>
                            </select><br>
                        </div>
                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="Akreditasi"><br>
                        </div>
                        <div class="form-group">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi"><br>
                        </div>
                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri"><br>
                        </div>
                        <div class="form-group">
                            <label for="output_lulusan">Output Lulusan</label>
                            <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" placeholder="Output Lulusan"><br>
                        </div>
                        <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
