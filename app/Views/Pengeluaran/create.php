<h3 class="mb-5 mt-2">Tambah Pengeluaran</h3>

<?= \Config\Services::validation()->listErrors() ?>

<form action="/pengeluaran/store" method="post">
    <?= csrf_field() ?>

    <div class="row">
        <div class="col-sm-6 col-md-3 mb-3">
            <select class="form-select" aria-label="Default select example" name="id_jenis">
                <option hidden selected>Pilih Jenis Pengeluaran</option>
                <?php foreach ($jenis_pengeluaran as $key => $value): ?>
                <option value="<?=$value['id']?>">
                    <?= $value["nama"] ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-sm-6 col-md-3">
            <label class="visually-hidden" for="autoSizingInputGroup">999999...</label>
            <div class="input-group">
                <div class="input-group-text">Rp</div>
                <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="999999..." name="value">
            </div>
        </div>
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
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
</form>