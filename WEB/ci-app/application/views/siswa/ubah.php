<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Siswa
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('siswa/ubah/' . $siswa['id']); ?>
                    <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $siswa['nama']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="nis">Nis</label>
                        <input type="text" name="nis" class="form-control" id="nis" value="<?= $siswa['nis']; ?>">
                        <small class="form-text text-danger"><?= form_error('nis'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="<?= $siswa['email']; ?>">
                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <?php foreach ($jurusan as $j) : ?>
                                <?php if ($j == $siswa['jurusan']) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                <?php else : ?>
                                    <option value="<?= $j; ?>"><?= $j; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <img id="img-file" src="<?= base_url('assets/img/siswa/'); ?><?= $siswa['gambar']; ?>" class="img-thumbnail" class="gambar">
                                <input type="hidden" name="gambar_lama" value="<?= $siswa['gambar'] ?>">
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
                    <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>