<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Siswa<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>siswa/tambah" class="btn btn-primary">Tambah Data Siswa</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data siswa..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Siswa</h3>
            <?php if (empty($siswa)) : ?>
                <div class="alert alert-danger" role="alert">
                    data mahasiswa tidak ditemukan...
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($siswa as $s) : ?>
                    <li class="list-group-item"><?= $s['nama']; ?>
                        <a href="<?= base_url(); ?>siswa/hapus/<?= $s['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
                        <a href="<?= base_url(); ?>siswa/ubah/<?= $s['id']; ?>" class="badge badge-success float-right">Ubah</a>
                        <a href="<?= base_url(); ?>siswa/detail/<?= $s['id']; ?>" class="badge badge-primary float-right">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>