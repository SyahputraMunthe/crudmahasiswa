<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Mahasiswa/tambah" class="btn btn-primary">Tambah Mahasiswa</button></a>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Nim</td>
                        <td>Email</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $us) : ?>
                        <tr>
                            <td> <?= $i; ?>.</td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['nim']; ?></td>
                            <td><?= $us['email']; ?></td>
                            <td>
                                <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="btn btn-danger rounded-pill">Hapus</button></a>
                                <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="btn btn-warning rounded-pill">Edit</button></a>
                                <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="btn btn-info rounded-pill">Detail</button></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
