<h3 class="mt-2"><?= esc($ternak['kode_sapi']) ?>
    (Pemilik: <?= esc($ternak['pemilik']) ?>)
</h3>
<div class="d-flex align-items-center mb-5">
    <span class="me-3">Berat Awal</span> : <?= esc($ternak['berat_awal']) ?> Kg
</div>
<div class="d-flex justify-content-sm-center justify-content-md-end">
    <a href="<?php echo base_url(''); ?>/pemeliharaan/create/<?= esc($ternak['id']) ?>">
        <button class="btn btn-primary mt-3 mb-2 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-plus-lg me-2" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
            </svg>Tambah
            Pemeliharaan</button>
    </a>
</div>
<hr>
<div class="table-responsive">
    <table id="example" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Jenis Pemeliharaan</th>
                <th>Nilai</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($pemeliharaan as $key => $value):
                    $idx = 0;
                    foreach ($value as $key_detail => $value_detail):
                            if ($idx == 0):
            ?>
            <tr>
                <td rowspan="<?= count($value) ?>">
                    <?= esc($key) ?>
                </td>
                <td>
                    <?= esc($value_detail['nama_jenis']) ?>
                </td>
                <td class="text-center">
                    <?= ($value_detail['value'] == 1) ? '<span class="badge rounded-pill bg-success">Ya</span>' :(($value_detail['value'] == 0) ? '<span class="badge rounded-pill bg-danger">Tidak</span>' :  esc("Rp " . number_format($value_detail['value'], 2, ',', '.')));?>
                </td>
                <td><?= ($value_detail['deskripsi']) ? esc($value_detail['deskripsi']) : "-" ?>
                </td>
            </tr>
            <?php else: ?>
            <tr>
                <td>
                    <?= esc($value_detail['nama_jenis']) ?>
                </td>
                <td class="text-center">
                    <?= ($value_detail['value'] == 1) ? '<span class="badge rounded-pill bg-success">Ya</span>' :(($value_detail['value'] == 0) ? '<span class="badge rounded-pill bg-danger">Tidak</span>' :  esc("Rp " . number_format($value_detail['value'], 2, ',', '.')));?>
                </td>
                <td><?= ($value_detail['deskripsi']) ? esc($value_detail['deskripsi']) : "-" ?>
                </td>
            </tr>

            <?php endif; ?>
            <?php
                            $idx++;
                    endforeach;
                endforeach;
            ?>
            <!-- <tr>
                <td rowspan="4">22-06-2021</td>
                <td>Pakan</td>
                <td>30000</td>
            </tr>
            <tr>
                <td>Minum</td>
                <td>Sudah</td>
            </tr>
            <tr>
                <td>Guyang</td>
                <td>Sudah</td>
            </tr>
            <tr>
                <td>Vaksin</td>
                <td>Tidak</td>
            </tr>
            <tr>
                <td rowspan="4">21-06-2021</td>
                <td>Pakan</td>
                <td>30000</td>
            </tr>
            <tr>
                <td>Minum</td>
                <td>Sudah</td>
            </tr>
            <tr>
                <td>Guyang</td>
                <td>Sudah</td>
            </tr>
            <tr>
                <td>Vaksin</td>
                <td>Tidak</td>
            </tr> -->
            <!-- <tfoot>
            <tr>
                <th>Tanggal</th>
                <th>Jenis Pemeliharaan</th>
                <th>Keterangan</th>
            </tr>
        </tfoot> -->
    </table>
</div>