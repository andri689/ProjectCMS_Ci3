<div id="ngilang">
  <?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
  <!-- Modal -->
  <div class="mt-1 mb-3">
    <button class="btn btn-success" href="" type="button" class="btn btn-primary" data-bs-toggle="modal"
      data-bs-target="#staticBackdrop">
      Tambah kategori
    </button>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="card">
              <div class="card-body">
                <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
                  <div class="col-12">
                    <label class="form-label">Nama Kategori</label>
                    <input name="nama_kategori" type="text" class="form-control" required>
                  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-15">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Kategori Konten</h5>
          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori Konten</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($kategori as $aa) { ?>
                <tr>
                  <th>
                    <?= $no; ?>
                  </th>
                  <td>
                    <?= $aa['nama_kategori'] ?>
                  </td>
                  <td>
                    <a href="<?= base_url('admin/kategori/delete_data/' . $aa['id_kategori']) ?>"
                      onclick="return confirm('Apakah anda yakin mengghapus data ini?')"
                      class="btn btn-square btn-danger m-2"><i class="bi bi-trash"></i></a>
                    <button class="btn btn-success" href="" type="button" class="btn btn-square btn-warning m-2"
                      data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_kategori'] ?>">
                      <i class="bi bi-pen"></i>
                    </button>
                    <div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" data-bs-backdrop="static"
                      data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="edit<?= $aa['id_kategori'] ?>">Perbarui Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="card">
                              <div class="card-body">
                                <form action="<?= base_url('admin/kategori/update') ?>" method="post">
                                  <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>"></input>
                                  <div class="col-12">
                                    <label class="form-label">Nama Kategori Konten </label>
                                    <input name="nama_kategori" type="text" class="form-control"
                                      value="<?= $aa['nama_kategori'] ?>">
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <?php $no++;
              } ?>
            </tbody>
          </table>
          <!-- End Default Table Example -->
        </div>
      </div>
    </div>
  </div>