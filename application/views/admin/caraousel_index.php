<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>

<div class="bg-secondary rounded h-100 p-4">
    <form action="<?= base_url('admin/carousel/simpan') ?>" method="post" enctype="multipart/form-data">
        <h6 class="mb-4">File Input</h6>
        <div class="col mb-3">
            <label for="username" class="form-label">Judul</label>
            <input
                type="text"
                name="judul"
                class="form-control"
                placeholder="Masukan Judul" required />
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Pilih Foto dengan Ukuran (1:3)</label>
            <input class="form-control bg-dark" type="file" name="foto" accept="image/apng, image/avif, image/gif, image/jpeg, image/png, image/svg+xml, image/webp">
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
    </form>
</div>
<div class="container-fluid pt-4 px-4 mb-4">
    <div class="row g-4">
        <?php foreach ($caraousel as $aa) { ?>
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="h-100 bg-secondary rounded p-3 my-2">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="<?= base_url('assets/upload/carousel/' . $aa['foto']) ?>" width="360px" alt="" class="rounded">
                    </div>
                    <div class="d-flex align-items-center mt-3">
                        <h4 class="mb-0 "><?= $aa['judul'] ?></h4>
                    </div>
                    <a href="<?= 'carousel/delete_data/', $aa['foto']; ?>"
                        class="btn btn-outline-danger mt-3"
                        onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                        <i class="fas fa-trash"></i> Hapus
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>