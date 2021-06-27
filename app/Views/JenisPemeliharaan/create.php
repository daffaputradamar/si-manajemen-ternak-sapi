<h3 class="mb-5 mt-2">Tambah Jenis Pemeliharaan</h3>

<?= \Config\Services::validation()->listErrors() ?>

<form action="<?= base_url(''); ?>/jenispemeliharaan/store" method="post">
    <?= csrf_field() ?>

    <div class="row align-items-end">
        <div class="col-sm-6 col-md-3 mb-3">
            <label class="form-label">Nama Jenis</label>
            <input type="text" class="form-control" name="nama_jenis" placeholder="Vaksin, Pakan..." required>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <select class="form-select" aria-label="Default select example" name="tipe">
                <option hidden selected>Pilih Jenis Pengeluaran</option>
                <option value="boolean">
                    Pilihan Ya / Tidak
                </option>
                <option value="value">
                    Memiliki Nilai
                </option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
</form>