<div class="d-flex justify-content-between align-items-center">
    <h3 class="mb-5 mt-2">Daftar Pemasukan</h3>
    <a href="<?= base_url(''); ?>/pemasukan/create" class="btn btn-outline-primary d-flex align-items-center"><svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg me-2"
            viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
        </svg> Tambah Pemasukan</a>
</div>
<hr>
<div class="table-responsive">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Kode Sapi</th>
                <th>Pengeluaran</th>
                <th>Harga Jual</th>
                <th>Berat Jual</th>
                <th>Tanggal Jual</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pemasukan as $pemasukan_item): ?>
            <tr>
                <td><?= esc($pemasukan_item['kode_sapi']) ?>
                </td>
                <td><?= esc("Rp " . number_format($pemasukan_item['pengeluaran'], 2, ',', '.')) ?>
                </td>
                <td><?= esc("Rp " . number_format($pemasukan_item['harga_jual'], 2, ',', '.')) ?>
                </td>
                <td><?= esc($pemasukan_item['berat_jual']) . " Kg" ?>
                </td>
                <td><?= esc($pemasukan_item['tanggal_jual']) ?>
                </td>
            </tr>

            <?php endforeach; ?>
        <tfoot>
            <tr>
                <th>Kode Sapi</th>
                <th>Pengeluaran</th>
                <th>Harga Jual</th>
                <th>Berat Jual</th>
                <th>Tanggal Jual</th>
            </tr>
        </tfoot>
    </table>
</div>