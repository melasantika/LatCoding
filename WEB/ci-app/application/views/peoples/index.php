<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data People<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-2">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>peoples/tambah" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add People</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-5">
            <form action="<?= base_url('peoples'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search keyword.." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <h3 class="">List of Peoples</h3>
            <h5>Result : <?= $total_rows; ?></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peoples as $p) : ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>peoples/detail/<?= $p['id']; ?>" class="badge badge-primary">Detail</a>
                                <a href="<?= base_url(); ?>peoples/ubah/<?= $p['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url(); ?>peoples/hapus/<?= $p['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <?php if (empty($peoples)) : ?>
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-danger" role="alert">
                                data not found!
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>

<!-- modal untuk tambah data -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add People</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('peoples/tambah'); ?>" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                        <small class="form-text text-danger"><?= form_error('name'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address">
                        <small class="form-text text-danger"><?= form_error('address'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="tambah">Save</button>
                    </div>

                </form>
            </div>