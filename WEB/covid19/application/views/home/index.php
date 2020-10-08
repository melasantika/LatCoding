<div class="container mt-3 ">
    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="width: 18rem; border-color:yellow">
                <div class="card-body">
                    <h5 class="card-title">Kasus Positif</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $nama_negara = $datas->name; ?></h6>
                    <h5 class="card-text text-warning"><?= $positif = $datas->numbers->infected; ?></h5>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 18rem; border-color:green">
                <div class="card-body">
                    <h5 class="card-title">Kasus Sembuh</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $nama_negara = $datas->name; ?></h6>
                    <h5 class="card-text text-success"><?= $sembuh = $datas->numbers->recovered; ?></h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 18rem; border-color:red">
                <div class="card-body">
                    <h5 class="card-title">Kasus Meninggal</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $nama_negara = $datas->name; ?></h6>
                    <h5 class="card-text text-danger"><?= $meninggal = $datas->numbers->fatal; ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kota</th>
                        <th scope="col" class="text-warning">Positif</th>
                        <th scope="col" class="text-success">Sembuh</th>
                        <th scope="col" class="text-danger">Meninggal</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($datas->regions as $data) {
                    ?>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $data->name; ?></td>
                        <td><?= $data->numbers->infected; ?></td>
                        <td><?= $data->numbers->recovered; ?></td>
                        <td><?= $data->numbers->fatal; ?></td>
                    </tr>
                <?php } ?>

                </tbody>

            </table>
        </div>
    </div>
</div>