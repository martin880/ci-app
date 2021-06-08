<div class="container">
    <div class="row-mt3">
        <div class="col-md-6">
            <div class="card border-info mb-3" style="max-width: 30rem;">
                <div class="card-header text-info font-weight-bolder">Form Ubah Data Mahasiswa</div>
                <div class="card-body text-info">
                    <h5 class="card-title">Mahasiswa</h5>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control text-info" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="text" name="npm" class="form-control text-info" id="npm" value="<?= $mahasiswa['npm']; ?>">
                            <small class="form-text text-danger"><?= form_error('npm'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control text-info" id="email" value="<?= $mahasiswa['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control text-info" id="jurusan" name="jurusan">
                                <?php foreach ($jurusan as $j) : ?>
                                    <?php if ($j == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-primary" name="ubah" href="<?= base_url(); ?>mahasiswa">Back</button>
                        <button type="submit" class="btn btn-outline-primary float-right" name="ubah">Edit Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>