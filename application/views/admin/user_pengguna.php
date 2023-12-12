<div id="ngilang">
  <?= $this->session->flashdata('alert', true) ?>
</div>
<div class="container-fluid pt-4 px-4">
  <!-- Modal -->
  <div class="mt-1 mb-3">
    <button class="btn btn-success" href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Tambah User
    </button>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="card">
              <div class="card-body">
                <form action="<?= base_url('admin/user/simpan') ?>" method="post">
                  <div class="col-12">
                    <label class="form-label">Username </label>
                    <input name="username" type="text" class="form-control" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Level</label>
                    <select class="form-select" name="level">
                      <option value="Admin">Admin</option>
                      <option value="Siswa">Siswa</option>
                    </select>
                  </div><!-- Vertical Form -->
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
          <h5 class="card-title">Data User</h5>
          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                <th scope="col">Level</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($user as $aa) { ?>
                <tr>
                  <th scope="row"><?= $no; ?></th>

                  <td><?= $aa['username'] ?></td>
                  <td><?= $aa['nama'] ?></td>
                  <td><?= $aa['level'] ?></td>
                  <td>
                    <a href="<?= base_url('admin/user/delete_data/' . $aa['id_user']) ?>" onclick="return confirm('Apakah anda yakin mengghapus data ini?')" class="btn btn-square btn-danger m-2"><i class="bi bi-trash"></i></a>
                    <button class="btn btn-success" href="" type="button" class="btn btn-square btn-warning m-2" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_user'] ?>">
                      <i class="bi bi-pen"></i>
                    </button>
                    <div class="modal fade" id="edit<?= $aa['id_user'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="edit<?= $aa['id_user'] ?>">Edit User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="card">
                              <div class="card-body">
                                <form action="<?= base_url('admin/user/update') ?>" method="post">
                                  <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>"></input>
                                  <div class="col-12">
                                    <label class="form-label">Username </label>
                                    <input name="username" type="text" class="form-control" value="<?= $aa['username'] ?>" readonly />
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Nama</label>
                                    <input name="nama" type="text" class="form-control" value="<?= $aa['nama'] ?>" />
                                  </div><!-- Vertical Form -->
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