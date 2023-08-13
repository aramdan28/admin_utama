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
                    <form class="row g-3" action="<?= base_url('guru/store'); ?>" method="POST">

                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="inputName5" name="nama" placeholder="Isikan Nama Anda">
                            <div class="text-danger">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Email</label>
                            <input type="text" class="form-control" id="inputName5" name="email" placeholder="Isikan Email Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="inputName5" name="nik" placeholder="Isikan NIk Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="inputName5" name="slug" placeholder="Isikan slug Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Jenis Kelamin</label>
                            <select name="jk" id="" class="form-control">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="inputName5" name="tanggal_lahir" >
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="inputName5" name="tempat_lahir" placeholder="Isikan Tempat Lahir Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">NPWP</label>
                            <input type="number" class="form-control" id="inputName5" name="npwp" placeholder="Isikan NPWP Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">NIP</label>
                            <input type="number" class="form-control" id="inputName5" name="nip" placeholder="Isikan NIP Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Agama</label>
                            <input type="text" class="form-control" id="inputName5" name="Agama" placeholder="Isikan Agama Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="inputName5" name="alamat" placeholder="Isikan Alamat Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">NUPTK</label>
                            <input type="text" class="form-control" id="inputName5" name="nuptk" placeholder="Isikan NUPTK Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">UKG</label>
                            <input type="text" class="form-control" id="inputName5" name="ukg" placeholder="Isikan UKG Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Handphone</label>
                            <input type="number" class="form-control" id="inputName5" name="hp" placeholder="Isikan Handphone Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" id="inputName5" name="pend_terakhir" placeholder="Isikan Pendidikan Terakhir Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="inputName5" name="jurusan" placeholder="Isikan Jurusan Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <!-- <div class="col-md-6">
                            <label for="inputState" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="inputName5" name="jabatan" placeholder="Isikan Jabatan Anda">
                            <div class="text-danger">

                            </div>

                        </div> -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Golongan</label>
                            <select name="golongan" id="" class="form-control">
                                <option value="iia">iia</option>
                                <option value="iib">iib</option>
                                <option value="iic">iic</option>
                                <option value="iid">iid</option>
                                <option value="iiia">iiia</option>
                                <option value="iiib">iiib</option>
                            </select>
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="guru">Guru</option>
                                <option value="tk">Tk</option>
                                <option value="ilpk">ILPK</option>
                                <option value="dosen">Dosen</option>
                            </select>
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control" id="inputName5" name="kec" placeholder="Isikan Kecamatan Anda">
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
                            <input type="text" class="form-control" id="inputName5" name="provinsi" placeholder="Isikan Provinsi Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Kompeten Keahlian</label>
                            <input type="text" class="form-control" id="inputName5" name="komp_keahlian" placeholder="Isikan Kompeten Keahlian Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Instansi</label>
                            <input type="text" class="form-control" id="inputName5" name="instansi" placeholder="Isikan Instansi Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">NPSN</label>
                            <input type="number" class="form-control" id="inputName5" name="npsn" placeholder="Isikan NPSN Anda">
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Ajar</label>
                            <select name="ajar" id="" class="form-control">
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>

                            </select>
                            <div class="text-danger">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Majar</label>
                            <input type="text" class="form-control" id="inputName5" name="majar" placeholder="Isikan Majar Anda">
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