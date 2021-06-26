<h3 class="mt-2">Tambah Pemeliharaan</h3>
<h5 class="mb-5"><?= esc($ternak['kode_sapi']) ?>
    (Pemilik: <?= esc($ternak['pemilik']) ?>)
</h5>

<?= \Config\Services::validation()->listErrors() ?>

<form action="/pemeliharaan/store/<?= esc($ternak['id']) ?>" method="post">
    <?= csrf_field() ?>

    <div class="row">
        <?php foreach ($jenis_pemeliharaan as $key => $value): ?>
        <div class="col-sm-12 col-md-6 mb-3">
            <h6 class="form-label"><?= $value['nama_jenis'] ?>
            </h6>
            <?php if ($value['tipe'] == "value") : ?>
            <div class="row">
                <div class="col">
                    <label class="form-label">Nilai</label>
                    <input type="text" class="form-control" name="<?=$value['nama_jenis']?>[]" placeholder="999999...."
                        required>
                </div>
                <div class="col">
                    <label class="form-label">Keterangan</label>
                    <input type="text" class="form-control" name="<?=$value['nama_jenis']?>[]" placeholder=".. Kg, .. l"
                        required>
                </div>
            </div>
            <?php else: ?>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="<?=$value['nama_jenis']?>" value="1">
                <label class="form-check-label">
                    Iya
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="<?=$value['nama_jenis']?>" checked value="0">
                <label class="form-check-label">
                    Tidak
                </label>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
        <input type="hidden" name="date" id="todayDate" />
        <script type="text/javascript">
        function getDate() {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            today = yyyy + "" + mm + "" + dd;

            document.getElementById("todayDate").value = today;
        }

        //call getDate() when loading the page
        getDate();
        </script>

        <!-- <div class="col-sm-12 col-md-6 mb-3">
            <h6 class="form-label">Pakan</h6>
            <div class="row">
                <div class="col">
                    <label class="form-label">Nilai</label>
                    <input type="text" class="form-control" name="pakan[]" placeholder="SAPI00001..." required>
                </div>
                <div class="col">
                    <label class="form-label">Keterangan</label>
                    <input type="text" class="form-control" name="pakan[]" placeholder="SAPI00001..." required>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mb-3">
            <h6 class="form-label mb-4">Guyang</h6>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="guyang" value="1">
                <label class="form-check-label">
                    Iya
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="guyang" checked value="0">
                <label class="form-check-label">
                    Tidak
                </label>
            </div>
        </div> -->
    </div>

    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
</form>