<h3 class="mb-5 mt-2">Tambah Sapi</h3>

<?= \Config\Services::validation()->listErrors() ?>

<form action="/ternak/store" method="post">
    <?= csrf_field() ?>

    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="mb-3">
                <label for="kodesapi" class="form-label">Kode Sapi</label>
                <input type="text" class="form-control" id="kodesapi" name="kode_sapi" placeholder="SAPI00001..."
                    required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="mb-3">
                <label for="pemilik" class="form-label">Nama Pemilik</label>
                <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Budi..." required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="mb-3">
                <label for="tanggalbeli" class="form-label">Tanggal Beli</label>
                <input type="date" class="form-control" id="tanggalbeli" name="tanggal_beli" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="mb-3">
                <label for="beratawal" class="form-label">Berat Awal</label>
                <input type="number" class="form-control" id="beratawal" name="berat_awal" step="any"
                    placeholder="000.00" required>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
</form>