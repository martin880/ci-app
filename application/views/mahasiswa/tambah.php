<div class="container">
    <div class="row-mt3">
        <div class="col-md-6">
            <div class="card border-info mb-3" style="max-width: 30rem;">
                <div class="card-header text-info font-weight-bolder">Form Tambah Data Mahasiswa</div>
                <div class="card-body text-info">
                    <h5 class="card-title">Mahasiswa</h5>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control text-info" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="text" name="npm" class="form-control text-info" id="npm">
                            <small class="form-text text-danger"><?= form_error('npm'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control text-info" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control text-info" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika" class="text-info">Teknik Informatika</option>
                                <option value="Sistem Informasi" class="text-info">Sistem Informasi</option>
                                <option value="Teknik Industri" class="text-info">Teknik Industri</option>
                                <option value="Hukum" class="text-info">Hukum</option>
                                <option value="Sastra Inggris" class="text-info">Sastra Inggris</option>
                                <option value="Managemen Bisnis" class="text-info">Managemen Bisnis</option>
                                <option value="Managemen Perbankan" class="text-info">Managemen Perbankan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-primary float-right" name="tambah">Add Data</button>
                        <a href="<?= base_url() ?>mahasiswa" class="btn btn-outline-warning">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>