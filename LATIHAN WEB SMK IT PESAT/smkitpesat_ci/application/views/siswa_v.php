<?php
$this->load->view('header_v');
?>
<div class="well well-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6 text-right">
                <a class="btn btn-default add" href="#modal_siswa" role="button" data-toggle="modal">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah</a>
                <a class="btn btn-default" href="#" role="button">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Hapus Semua</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>NIS</td>
                            <td>Nama Siswa</td>
                            <td>Kelas</td>
                            <td>Jurusan</td>
                            <td>Alamat</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($siswa->result() as $data) : ?>
                            <tr>
                                <td><?php echo $data->nis; ?></td>
                                <td><?php echo $data->nama; ?></td>
                                <td><?php echo $data->kelas; ?></td>
                                <td><?php echo $data->jurusan; ?></td>
                                <td><?php echo $data->alamat; ?></td>
                                <td><a class="btn btn-default" href="#" role="button">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Ubah</a>
                                    <a class="btn btn-default" href="#" role="button">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- modal siswa -->
<div class="modal fade" id="modal_siswa" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-left">Form Siswa</h4>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="post" id="form_siswa">
                    <div class="form-group">
                        <label for="nis" class="col-md-4">Nis</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nis" id="nis" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama" class="col-md-4">Nama</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kelas" class="col-md-4">Kelas</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="kelas" id="kelas" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jurusan" class="col-md-4">Jurusan</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="jurusan" id="jurusan" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="col-md-4">Alamat</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="alamat" id="alamat" required>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="save" form="form_siswa">
                    <span class="glyphicon glyphicon-floppy-disk">Simpan</span>
                </button>

                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<!-- akhir modal siswa -->
<?php
$this->load->view('footer_v');
?>

<script type="text/javascript">
    $(document).ready(function() {
        $(".add").click(function() {})
    })
</script>