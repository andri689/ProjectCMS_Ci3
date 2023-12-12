<div id="ngilang">
  <?= $this->session->flashdata('alert', true) ?>
</div>
<div class="col-lg-12 col-md-12">
  <!-- Modal -->
  <div class="mt-1 mb-3">
    <button class="btn btn-success" href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Tambah Konten
    </button>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Tambah Konten</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="card">
              <div class="card-body">
                <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
                  <div class="col mb-3">
                    <label class="form-label">Judul</label>
                    <input name="judul" type="text" class="form-control" required>
                  </div>
                  <div class="col mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="id_kategori" class="form-control">
                      <?php foreach ($kategori as $aa) { ?>
                        <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control"></textarea>
                  </div>
                  <div class="col mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg" />
                  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
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
                <th scope="col">Judul</th>
                <th scope="col">Kategori Konten</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kreator</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($konten as $aa) { ?>
                <tr>
                  <th><?= $no; ?></th>
                  <td><?= $aa['judul'] ?></td>
                  <td><?= $aa['nama_kategori'] ?></td>
                  <td><?= $aa['tanggal'] ?></td>
                  <td><?= $aa['nama'] ?></td>
                  <td>
                    <a href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="_blank">
                      <i class="bi bi-search"></i> Lihat Foto
                    </a>
                  </td>
                  <td>
                    <a href="<?= base_url('admin/konten/delete_data/' . $aa['foto']) ?>" onclick="return confirm('Apakah anda yakin mengghapus data ini?')" class="btn btn-square btn-danger m-2"><i class="bi bi-trash"></i></a>   
                    <button class="btn btn-success" href="" type="button" class="btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#konten<?= $no; ?>">
                        <i class="bi bi-pen"></i>
                    </button>
                    <div class="modal fade" id="konten<?= $no; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><?= $aa['judul'] ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="card">
                              <div class="card-body">
                                <form action="<?= base_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                                  <div class="col mb-3">
                                    <label class="form-label">Judul</label>
                                    <input name="judul" type="text" class="form-control" value="<?= $aa['judul'] ?>" >
                                  </div>
                                  <div class="col mb-3">
                                    <label class="form-label">Kategori</label>
                                    <select name="id_kategori" class="form-control">
                                      <?php foreach ($kategori as $uu) { ?>
                                        <option 
                                        <?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected";} ?>
                                        value="<?= $uu['id_kategori'] ?>">
                                        <?= $uu['nama_kategori'] ?></option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                  <div class="col mb-3">
                                    <label class="form-label">Keterangan</label>
                                    <textarea name="keterangan" class="form-control"<?= $aa['keterangan'] ?>></textarea>
                                  </div>
                                  <div class="col mb-3">
                                    <label class="form-label">Foto</label>
                                    <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg" />
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
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