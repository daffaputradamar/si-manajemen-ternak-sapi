<div class="d-flex justify-content-between align-items-center">
    <h3 class="mb-5 mt-2">Daftar Sapi</h3>
    <a href="<?= base_url(''); ?>/ternak/create" class="btn btn-outline-primary d-flex align-items-center"><svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg me-2"
            viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
        </svg> Tambah Data Sapi</a>
</div>
<hr>
<div class="table-responsive">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Kode Sapi</th>
                <th>Pemilik</th>
                <th>Tanggal Beli</th>
                <th>Berat Awal</th>
                <th>Sudah Terjual</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ternak as $ternak_item): ?>
            <tr>
                <td><?= esc($ternak_item['kode_sapi']) ?>
                </td>
                <td><?= esc($ternak_item['pemilik']) ?>
                </td>
                <td><?= esc($ternak_item['tanggal_beli']) ?>
                </td>
                <td><?= esc($ternak_item['berat_awal']) ?>
                </td>
                <td><?= ($ternak_item['sudah_dijual']) ? "Sudah" : "Belum" ?>
                </td>
                <td>
                    <a href="<?= base_url(''); ?>/ternak/show/<?= esc($ternak_item['id']) ?>"><button
                            class="btn btn-outline-secondary">Lihat Detail</button></a>
                </td>
            </tr>

            <?php endforeach; ?>
        <tfoot>
            <tr>
                <th>Kode Sapi</th>
                <th>Pemilik</th>
                <th>Tanggal Beli</th>
                <th>Berat Awal</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>