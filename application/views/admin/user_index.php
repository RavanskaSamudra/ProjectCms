<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>

<div class="col-lg-4 col-md-6">
    <small class="text-light fw-semibold">Daftar User</small>
    <div class="mt-3 mb-3">
        <!-- Button trigger modal -->
        <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#modalCenter">
            Tambah User
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="<?= base_url('user/simpan') ?>" method="post">
                    <div class="modal-content text-dark">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="modalCenterTitle">Tambah User</h5>
                            <button
                                type="button"
                                class="btn-close text-light"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="username" class="form-label">username</label>
                                    <input
                                        type="text"
                                        name="username"
                                        class="form-control"
                                        placeholder="Masukan username" required />
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nama" class="form-label">nama</label>
                                        <input
                                            type="text"
                                            name="nama"
                                            class="form-control"
                                            placeholder="Masukan nama" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control"
                                            placeholder="Masukan Password" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="level" class="form-label">level</label>
                                        <select name="level" class="form-control">
                                            <option value="Admin">Admin</option>
                                            <option value="Kontributor">Kontributor</option>
                                        </select>
                                    </div>
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
        <h6 class="mb-4">Daftar User</h6>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Level</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $aa) { ?>
                    <tr>
                        <td><?= $aa['username'] ?></td>
                        <td><?= $aa['nama'] ?></td>
                        <td><?= $aa['level'] ?></td>
                        <td>
                            <a href="<?= 'user/delete_data/', $aa['id_user']; ?>" class="btn btn-sm btn-danger" onClick="return confirm('apakah anda yakin untuk menghapusnya?')"><i class="fas fa-trash-alt"></i></a>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_user'] ?>">
                                <i class="fas fa-edit"></i>
                            </button>
                            <div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form action="<?= base_url('user/edit') ?>" method="post">
                                        <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
                                        <div class="modal-content text-dark">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark" id="modalCenterTitle">Perbarui User</h5>
                                                <button
                                                    type="button"
                                                    class="btn-close text-light"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="username" class="form-label">username</label>
                                                        <input
                                                            type="text"
                                                            name="username"
                                                            value="<?= $aa['username'] ?>"
                                                            class="form-control"
                                                            placeholder="Masukan username" required />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="nama" class="form-label">nama</label>
                                                            <input
                                                                type="text"
                                                                name="nama"
                                                                value="<?= $aa['nama'] ?>"
                                                                class="form-control"
                                                                placeholder="Masukan nama" required />
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
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>