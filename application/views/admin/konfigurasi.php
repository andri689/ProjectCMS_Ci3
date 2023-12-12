<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>

<div class="col-lg-12 col-md-12">
    <form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Konfigurasi</h5>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="col mb-3">
                            <label class="form-label">Judul Website</label>
                            <input type="text" class="form-control" name="judul"
                                value="<?= $konfig->judul_website; ?>" />
                        </div>
                        <div class="col mb-3">
                            <label class="form-label">Profil</label>
                            <textarea class="form-control"
                                name="profil_website"><?= $konfig->profil_website; ?></textarea>
                        </div>
                        <div class="col mb-3">
                            <label class="form-label">Instagram</label>
                            <input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>">
                        </div>
                        <div class="col mb-3">
                            <label class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>">
                        </div>
                        <div class="col mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>">
                        </div>
                        <div class="col mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>">
                        </div>
                        <div class="col mb-3">
                            <label class="form-label">Whatsapp</label>
                            <input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>