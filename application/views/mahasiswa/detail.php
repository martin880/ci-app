<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card border-info mb-3" style="max-width: 30rem;">
                <div class="card-header text-info">
                    <h5>Detail Data Mahasiswa</h5>
                </div>
                <div class="card-body text-info">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <h6 class="card-title"><?= $mahasiswa['npm']; ?></h6>
                    <p class="card-text text-muted"><?= $mahasiswa['email']; ?></p>
                    <p class="card-text text-muted"><?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url() ?>mahasiswa" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>