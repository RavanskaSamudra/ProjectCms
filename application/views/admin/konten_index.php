<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>

<div class="col-lg-4 col-md-6">
    <small class="text-light fw-semibold">Daftar konten</small>
    <div class="mt-3 mb-3">
        <!-- Button trigger modal -->
        <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#modalCenter">
            Tambah Konten
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-content bg-secondary">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="modalCenterTitle">Tambah Konten</h5>
                            <button
                                type="button"
                                class="btn-close text-light"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="username" class="form-label">Judul</label>
                                    <input
                                        type="text"
                                        name="judul"
                                        class="form-control"
                                        placeholder="Masukan Judul" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="username" class="form-label">Keterangan</label>
                                    <select name="id_kategori" class="form-control">
                                        <?php
                                        foreach ($kategori as $aa) { ?>
                                            <option value="<?= $aa['id_kategori'] ?>" class=""><?= $aa['nama_kategori'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="username" class="form-label">Keterangan</label>
                                    <textarea name="keterangan" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="username" class="form-label">Foto</label>
                                    <input type="file" name="foto" class="form-control" accept="image/apng, image/avif, image/gif, image/jpeg, image/png, image/svg+xml, image/webp">
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

<div class="col-sm-12 col-xl-10">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Daftar konten</h6>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">judul</th>
                    <th scope="col">kategori konten</th>
                    <th scope="col">tanggal</th>
                    <th scope="col">username</th>
                    <th scope="col">foto</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($konten as $aa) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $aa['judul'] ?></td>
                        <td><?= $aa['nama_kategori'] ?></td>
                        <td><?= $aa['tanggal'] ?></td>
                        <td><?= $aa['nama'] ?></td>
                        <td>
                            <a href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="_blank">
                                <i class="fas fa-search"></i>Lihat foto
                            </a>
                        </td>
                        <td>
                            <a href="<?= 'konten/delete_data/', $aa['foto']; ?>" class="btn btn-sm btn-danger" onClick="return confirm('apakah anda yakin untuk menghapusnya?')"><i class="fas fa-trash-alt"></i></a>

                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#konten<?= $no; ?>">
                                <i class="fas fa-edit"></i>
                            </button>
                            <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form action="<?= base_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                                        <div class="modal-content bg-secondary">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-light" id="modalCenterTitle">Edit Konten</h5>
                                                <button
                                                    type="button"
                                                    class="btn-close text-light"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="username" class="form-label"><?= $aa['judul'] ?></label>
                                                        <input
                                                            type="text"
                                                            name="judul"
                                                            class="form-control"
                                                            placeholder="Masukan Judul" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="username" class="form-label">kategori</label>
                                                        <select name="id_kategori" class="form-control">
                                                            <?php
                                                            foreach ($kategori as $uu) { ?>
                                                                <option
                                                                    <?php if ($uu['id_kategori'] == $aa['id_kategori']) {
                                                                        echo "selected";
                                                                    } ?>
                                                                    value="<?= $uu['id_kategori'] ?>" class=""><?= $uu['nama_kategori'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="username" class="form-label">Keterangan</label>
                                                        <textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?>s</textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="username" class="form-label">Foto</label>
                                                        <input type="file" name="foto" class="form-control" accept="image/apng, image/avif, image/gif, image/jpeg, image/png, image/svg+xml, image/webp">
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
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>