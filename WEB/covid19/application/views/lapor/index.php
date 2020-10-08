<div class="container mt-3">
    <?php if ($this->session->flashdata('flash')) : ?>

        <div class="row">
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Pelapor<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>

    <?php endif; ?>
    <div class="row">
        <div class="col-lg-3">
            <button class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                Tambah Data
            </button>
            <a href="<?= base_url(); ?>lapor/report" class="btn btn-secondary mr-1">Report PDF</a>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-lg-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data pelapor..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <h3>Daftar Data Lapor Sigap Covid-19</h3>
            <?php if (empty($lapor)) : ?>
                <div class="alert alert-danger" role="alert">
                    data pelapor tidak ditemukan...
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($lapor as $l) : ?>
                    <li class="list-group-item"><?= $l['nama']; ?>
                        <a href="<?= base_url(); ?>lapor/hapus/<?= $l['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>

                        <a href="<?= base_url(); ?>lapor/ubah/<?= $l['id']; ?>" class="badge badge-success float-right" data-toggle="modal" data-target="#ubahlapor">Ubah</a>

                        <a href="<?= base_url(); ?>lapor/detail/<?= $l['id']; ?>" class="badge badge-primary float-right" data-toggle="modal" data-target="#detaillapor">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- modal ubah -->
    <div class="modal fade" id="ubahlapor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('lapor/ubah/' . $l['id']); ?>

                    <input type="hidden" name="id" value="<?= $l['id']; ?>">
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" id="id" value="<?= $l['id']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $l['nama']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $l['alamat']; ?>">
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="pernyataan">Pernyatan</label>
                        <input type="text" name="pernyataan" class="form-control" id="pernyataan" value="<?= $l['pernyataan']; ?>">
                        <small class="form-text text-danger"><?= form_error('pernyataan'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <img id="img-file" src="<?= base_url('assets/img/lapor/'); ?><?= $l['gambar']; ?>" class="img-thumbnail" class="gambar">
                                <input type="hidden" name="gambar_lama" value="<?= $l['gambar'] ?>">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                    <label class="custom-file-label">Pilih file</label>
                                </div>
                            </div>
                        </div>
                        <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="ubah">Ubah Data</button>
                    </div>

                    <?php echo form_close(); ?>
                </div>

            </div>
        </div>
    </div>









    <!-- modal detail -->
    <div class="modal fade" id="detaillapor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data Pelopor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            Detail Data Pelapor
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $l['nama']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $l['alamat']; ?></h6>
                            <p class="card-text"><?= $l['pernyataan']; ?></p>
                            <p class="card-text"><img src="<?= base_url('assets/img/lapor/'); ?><?= $l["gambar"]; ?>" width="25%"></p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- modal untuk tambah data -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelapor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('lapor/tambah'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="pernyataan">Pernyataan</label>
                            <input type="text" name="pernyataan" class="form-control" id="pernyataan">
                            <small class="form-text text-danger"><?= form_error('pernyataan'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="gambar">
                            <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="tambah">Save changes</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</div>