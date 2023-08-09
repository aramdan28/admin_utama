<?= $this->extend('layouts/master') ?>
<?= $this->section('title') ?>
Data Guru
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- <div class="pagetitle">
    <h1>Data Guru</h1>
</div>End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card p-3">
                <div class="card-header">
                    <h3 class="card-title">Data Guru</h3>
                    <a href="<?= base_url('guru/add'); ?>" class="btn btn-primary" style="float: right">
                        <i class="bi bi-plus-circle-fill"></i>
                        Tambah Data</a>
                </div>

                <div class="card-body">
                    <!-- Table with stripped rows -->
                    <div class="table-responsive">

                        <table class="table datatable table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $key => $guru) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $guru['nama'] ?></td>
                                        <td><?= $guru['email'] ?></td>
                                        <td><?= $guru['slug'] ?></td>
                                        <td>
                                            <a href="<?= base_url('guru/edit/' . $guru['id']) ?>" class="btn btn-info btn-sm btn-flat">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="<?= base_url('guru/destroy/' . $guru['id']) ?>" class="btn btn-danger btn-sm btn-flat">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>



<?= $this->endSection() ?>