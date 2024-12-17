<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>

<div class="col-lg-4 col-md-6">
    <small class="text-light fw-semibold">Daftar Kategori</small>
    <div class="mt-3 mb-3">
        <!-- Button trigger modal -->
        <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#modalCenter">
            Tambah Kategori
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
                    <div class="modal-content text-dark">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="modalCenterTitle">Tambah Kategori</h5>
                            <button
                                type="button"
                                class="btn-close text-light"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="username" class="form-label">nama kategori</label>
                                    <input
                                        type="text"
                                        name="nama_kategori"
                                        class="form-control"
                                        placeholder="Masukan kategori" required />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Daftar kategori</h6>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama kategori konten</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($kategori as $aa) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $aa['nama_kategori'] ?></td>
                        <td>
                            <a href="<?= 'kategori/delete_data/', $aa['id_kategori']; ?>" class="btn btn-sm btn-danger" onClick="return confirm('apakah anda yakin untuk menghapusnya?')"><i class="fas fa-trash-alt"></i></a>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_kategori'] ?>">
                                <i class="fas fa-edit"></i>
                            </button>
                            <div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form action="<?= base_url('admin/kategori/update') ?>" method="post">
                                        <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
                                        <div class="modal-content text-dark">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark" id="modalCenterTitle">Perbarui kategori</h5>
                                                <button
                                                    type="button"
                                                    class="btn-close text-light"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="nama" class="form-label">nama</label>
                                                            <input
                                                                type="text"
                                                                name="nama_kategori"
                                                                value="<?= $aa['nama_kategori'] ?>"
                                                                class="form-control"
                                                                placeholder="Masukan nama kategori" required />
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button
                                                            type="button"
                                                            class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                                                    </div>
                                                </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>