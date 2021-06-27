<div class="d-flex justify-content-between align-items-center mb-5 mt-2">
    <h3 class="mb-0">Daftar Sapi</h3>
    <a class="btn btn-link" href="<?= base_url(''); ?>/jenispemeliharaan">Jenis
        Pemeliharaan</a>
</div>
<h6>Sapi yang <b>Belum</b> dirawat hari ini</h6>
<hr>
<div class="table-responsive">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Kode Sapi</th>
                <th>Pemilik</th>
                <th>Pemeliharaan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ternak as $ternak_item): ?>
            <tr>
                <td><?= esc($ternak_item['kode_sapi']) ?>
                </td>
                <td><?= esc($ternak_item['pemilik']) ?>
                </td>
                <td>
                    <a href="<?= base_url(''); ?>/pemeliharaan/show/<?= esc($ternak_item['id']) ?>"><button
                            class="btn btn-outline-secondary">Pemeliharaan</button></a>
                </td>
            </tr>

            <?php endforeach; ?>
        <tfoot>
            <tr>
                <th>Kode Sapi</th>
                <th>Pemilik</th>
                <th>Pemeliharaan</th>
            </tr>
        </tfoot>
    </table>
    <h6 class="mt-5">Sapi yang <b>Sudah</b> dirawat hari ini</h6>
    <hr>
    <div class="table-responsive">
        <table id="example2" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Kode Sapi</th>
                    <th>Pemilik</th>
                    <th>Pemeliharaan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ternak_done as $ternak_item): ?>
                <tr>
                    <td><?= esc($ternak_item['kode_sapi']) ?>
                    </td>
                    <td><?= esc($ternak_item['pemilik']) ?>
                    </td>
                    <td>
                        <a href="<?= base_url(''); ?>/pemeliharaan/show/<?= esc($ternak_item['id']) ?>"><button
                                class="btn btn-outline-secondary">Pemeliharaan</button></a>
                    </td>
                </tr>

                <?php endforeach; ?>
            <tfoot>
                <tr>
                    <th>Kode Sapi</th>
                    <th>Pemilik</th>
                    <th>Pemeliharaan</th>
                </tr>
            </tfoot>
        </table>
    </div>