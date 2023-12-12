
<div class="col-xl-12">
    <div class="card">
        <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <h5 class="card-title">General Form Elements</h5>
                <!-- General Form Elements -->
                <form>
                    <div class="col mb-3">
                        <label class="form-label">Judul</label>
                        <input name="judul" type="text" class="form-control" required>
                    </div>
                    <div class="row mb-3">
                        <label for="formFile" class="form-label"> Pilih Foto dengan ukuran (1:3)</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="foto">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
            </div>
        </form><!-- End General Form Elements -->
    </div>
    </form>
</div>
<div class="row">
<?php foreach ($caraousel as $aa) { ?>
    <div class="col-md-3 mb-3 mt-3">
        <div class="card h-100">
            <img src="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>" class="card-img-top" style="max-height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $aa['judul'] ?>
                </h5>
                <a href="<?= base_url('admin/caraousel/delete_data/' . $aa['foto']) ?>"
                    onclick="return confirm('Apakah anda yakin mengghapus data ini?')"
                    class="btn btn-square btn-danger m-2"><i class="bi bi-trash"></i></a>
            </div>
        </div>
    </div>
<?php } ?>
</div>
