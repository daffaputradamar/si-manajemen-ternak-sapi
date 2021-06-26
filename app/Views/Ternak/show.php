<div class="d-flex align-items-center mt-2 mb-5">
    <h3>Detail Sapi</h3>
    <span class="ms-4">
        <a class="btn btn-outline-secondary d-flex align-items-center"
            href="<?= base_url(''); ?>/ternak/edit/<?= esc($ternak['id']) ?>"><svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-pencil me-2" viewBox="0 0 16 16">
                <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
            </svg> Ubah</a>
    </span>
</div>

<div class="row">
    <div class="col-sm-12 col-md-6">

        <div class="mb-3">
            <label for="kodesapi" class="form-label">Kode Sapi</label>
            <input type="text" class="form-control" id="kodesapi" name="kode_sapi"
                value="<?= esc($ternak['kode_sapi']) ?>" required readonly>

        </div>


        <div class="mb-3">
            <label for="pemilik" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" id="pemilik" name="pemilik" value="<?= esc($ternak['pemilik']) ?>"
                required readonly>

        </div>


        <div class="mb-3">
            <label for="tanggalbeli" class="form-label">Tanggal Beli</label>
            <input type="date" class="form-control" id="tanggalbeli" name="tanggal_beli"
                value="<?= esc($ternak['tanggal_beli']) ?>" required readonly>

        </div>


        <div class="mb-3">
            <label for="beratawal" class="form-label">Berat Awal</label>
            <input type="number" class="form-control" id="beratawal" name="berat_awal" step="any"
                value="<?= esc($ternak['berat_awal']) ?>" required readonly>

        </div>
    </div>
</div>