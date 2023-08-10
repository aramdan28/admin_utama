<?= $this->extend('layouts/master') ?>
<?= $this->section('title') ?>
Data Guru
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="card p-3">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Guru Form</h3>
                </div>
                <div class="card-body">
                    <!-- Multi Columns Form -->
                    <form class="row g-3" action="<?= base_url('guru/update/' . $guru['id']); ?>" method="POST">

                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="inputName5" name="nama" value="<?= $guru['nama']; ?>" placeholder="Isikan Nama Anda">
                            <div class="text-danger">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Email</label>
                            <input type="text" class="form-control" id="inputName5" name="email" value="<?= $guru['email']; ?>" placeholder="Isikan Email Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="inputName5" name="nik" value="<?= $guru['nik']; ?>" placeholder="Isikan NIk Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="inputName5" name="slug" value="<?= $guru['slug']; ?>" placeholder="Isikan slug Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Jenis Kelamin</label>
                            <select name="jk" id="" class="form-control">
                                <option value="L" <?= ($guru['jk'] == 'L') ? 'selected' : '' ?>>Laki-laki</option>
                                <option value="P" <?= ($guru['jk'] == 'P') ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="inputName5" name="tanggal_lahir" value="<?= $guru['tanggal_lahir']; ?>">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="inputName5" name="tempat_lahir" value="<?= $guru['tempat_lahir']; ?>" placeholder="Isikan Tempat Lahir Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputNPWP" class="form-label">NPWP</label>
                            <input type="number" class="form-control" id="inputNPWP" name="npwp" value="<?= $guru['npwp']; ?>" placeholder="Isikan NPWP Anda">
                            <div class="text-danger">
                                <!-- Error message handling here -->
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">NIP</label>
                            <input type="number" class="form-control" id="inputName5" name="nip" value="<?= $guru['nip']; ?>" placeholder="Isikan NIP Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Agama</label>
                            <input type="text" class="form-control" id="inputName5" name="Agama" value="<?= $guru['Agama']; ?>" placeholder="Isikan Agama Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="inputName5" name="alamat" value="<?= $guru['alamat']; ?>" placeholder="Isikan Alamat Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">NUPTK</label>
                            <input type="text" class="form-control" id="inputName5" name="nuptk" value="<?= $guru['nuptk']; ?>" placeholder="Isikan NUPTK Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">UKG</label>
                            <input type="text" class="form-control" id="inputName5" name="ukg" value="<?= $guru['ukg']; ?>" placeholder="Isikan UKG Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Handphone</label>
                            <input type="number" class="form-control" id="inputName5" name="hp" value="<?= $guru['hp']; ?>" placeholder="Isikan Handphone Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" id="inputName5" name="pend_terakhir" value="<?= $guru['pend_terakhir']; ?>" placeholder="Isikan Pendidikan Terakhir Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="inputName5" name="jurusan" value="<?= $guru['jurusan']; ?>" placeholder="Isikan Jurusan Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="inputName5" name="jabatan" value="<?= $guru['jabatan']; ?>" placeholder="Isikan Jabatan Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Golongan</label>
                            <select name="golongan" id="" class="form-control">
                                <option value="iia" <?= ($guru['golongan'] == 'iia') ? 'selected' : '' ?>>iia</option>
                                <option value="iib" <?= ($guru['golongan'] == 'iib') ? 'selected' : '' ?>>iib</option>
                                <option value="iic" <?= ($guru['golongan'] == 'iic') ? 'selected' : '' ?>>iic</option>
                                <option value="iid" <?= ($guru['golongan'] == 'iid') ? 'selected' : '' ?>>iid</option>
                                <option value="iiia"<?= ($guru['golongan'] == 'iiia') ? 'selected' : '' ?>>iiia</option>
                                <option value="iiib"<?= ($guru['golongan'] == 'iiib') ? 'selected' : '' ?>>iiib</option>
                            </select>
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="guru" <?= ($guru['status'] == 'guru') ? 'selected' : '' ?>>Guru</option>
                                <option value="tk"<?= ($guru['status'] == 'tk') ? 'selected' : '' ?>>Tk</option>
                                <option value="ilpk"<?= ($guru['status'] == 'ilpk') ? 'selected' : '' ?>>ILPK</option>
                                <option value="dosen"<?= ($guru['status'] == 'dosen') ? 'selected' : '' ?>>Dosen</option>
                            </select>
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control" id="inputName5" name="kec" value="<?= $guru['kec']; ?>" placeholder="Isikan Kecamatan Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="inputName5" name="kota" placeholder="Isikan Kota Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Provinsi</label>
                            <input type="text" class="form-control" id="inputName5" name="provinsi" value="<?= $guru['provinsi']; ?>" placeholder="Isikan Provinsi Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Kompeten Keahlian</label>
                            <input type="text" class="form-control" id="inputName5" name="komp_keahlian" value="<?= $guru['komp_keahlian']; ?>" placeholder="Isikan Kompeten Keahlian Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Instansi</label>
                            <input type="text" class="form-control" id="inputName5" name="instansi" value="<?= $guru['instansi']; ?>" placeholder="Isikan Instansi Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">NPSN</label>
                            <input type="number" class="form-control" id="inputName5" name="npsn" value="<?= $guru['npsn']; ?>" placeholder="Isikan NPSN Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Ajar</label>
                            <select name="ajar" id="" class="form-control">
                                <option value="10" <?= ($guru['ajar'] == '10') ? 'selected' : '' ?>>10</option>
                                <option value="11"<?= ($guru['ajar'] == '11') ? 'selected' : '' ?>>11</option>
                                <option value="12"<?= ($guru['ajar'] == '12') ? 'selected' : '' ?>>12</option>

                            </select>
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Majar</label>
                            <input type="text" class="form-control" id="inputName5" name="majar" value="<?= $guru['majar']; ?>" placeholder="Isikan Majar Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                </form><!-- End Multi Columns Form -->
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>