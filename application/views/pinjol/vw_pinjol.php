<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Pinjol/tambah" class="btn btn-primary">Tambah Pinjaman</button></a>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Lengkap</td>
                        <td>email</td>
                        <td>Besar Pinjaman</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pinjaman as $us) : ?>
                        <tr>
                            <td> <?= $i; ?>.</td>
                            <td><?= $us['Nama_Lengkap']; ?></td>
                            <td><?= $us['email']; ?></td>
                            <td><?= $us['Besar_Pinjaman']; ?></td>
                            <td>
                                <a href="<?= base_url('Pinjol/hapus/') . $us['id']; ?>" class="btn btn-danger rounded-pill">Hapus</button></a>
                                <a href="<?= base_url('Pinjol/edit/') . $us['id']; ?>" class="btn btn-warning rounded-pill">Edit</button></a>
                                <a href="<?= base_url('Pinjol/detail/') . $us['id']; ?>" class="btn btn-info rounded-pill">Detail</button></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
