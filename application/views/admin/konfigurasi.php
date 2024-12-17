<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post" enctype="multipart/form-data">
    <div class="modal-content bg-secondary">
        <div class="modal-header">
            <h5 class="modal-title text-light" id="modalCenterTitle">Konfigurasi</h5>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="username" class="form-label">Judul Website</label>
                    <input
                        type="text"
                        name="judul"
                        class="form-control"
                        placeholder="Masukan Judul" value="<?= $konfig->judul_website; ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="username" class="form-label">Profile</label>
                    <textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="username" class="form-label">Facebook</label>
                    <input
                        type="text"
                        name="facebook"
                        class="form-control"
                        value="<?= $konfig->facebook; ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="username" class="form-label">instagram</label>
                    <input
                        type="text"
                        name="instagram"
                        class="form-control"
                        value="<?= $konfig->instagram; ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="username" class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="<?= $konfig->email; ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="username" class="form-label">Whatsapp</label>
                    <input
                        type="text"
                        name="no_wa"
                        class="form-control"
                        value="<?= $konfig->no_wa; ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="username" class="form-label">Alamat</label>
                    <input
                        type="text"
                        name="alamat"
                        class="form-control"
                        value="<?= $konfig->alamat; ?>" />
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
    </div>
</form>