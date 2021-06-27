<!-- <header class="py-3 mb-4 border-bottom shadow">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
        <div>
            <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none">
                <i class="bi bi-bootstrap fs-2 text-dark"></i>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <form class="w-100 me-3">
                <input type="search" class="form-control" placeholder="Search...">
            </form>
            <div class="flex-shrink-0 dropdown">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://via.placeholder.com/28?text=!" alt="user" width="32" height="32"
                        class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header> -->
<main class="container-fluid mt-3 pb-3 flex-grow-1 d-flex flex-column flex-sm-row overflow-auto content">
    <div class="row flex-sm-grow-0 flex-md-grow-1">
        <div class="col-sm-2 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top pb-sm-0 pb-3">
            <div class="border rounded-3 p-3 h-100 sticky-top opaque">
                <h5 class="d-none d-sm-block text-muted border-bottom border-success pb-3">Sistem Informasi Manajemen
                    Ternak
                    Sapi</h5>
                <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between text-truncate">
                    <li class="nav-item mb-2">
                        <a href="<?= base_url(''); ?>/pemeliharaan"
                            class="nav-link px-2 text-truncate text-dark d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-bucket" viewBox="0 0 16 16">
                                <path
                                    d="M2.522 5H2a.5.5 0 0 0-.494.574l1.372 9.149A1.5 1.5 0 0 0 4.36 16h7.278a1.5 1.5 0 0 0 1.483-1.277l1.373-9.149A.5.5 0 0 0 14 5h-.522A5.5 5.5 0 0 0 2.522 5zm1.005 0a4.5 4.5 0 0 1 8.945 0H3.527zm9.892 1-1.286 8.574a.5.5 0 0 1-.494.426H4.36a.5.5 0 0 1-.494-.426L2.58 6h10.838z" />
                            </svg>
                            <span class="d-none d-sm-inline ps-3">Pemeliharaan</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="<?= base_url(''); ?>/ternak"
                            class="nav-link px-2 text-truncate text-dark d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                            <span class="d-none d-sm-inline ps-3">Ternak Sapi</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="<?= base_url(''); ?>/pengeluaran"
                            class="nav-link px-2 text-truncate text-dark d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-cash" viewBox="0 0 16 16">
                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                <path
                                    d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                            </svg>
                            <span class="d-none d-sm-inline ps-3">Pengeluaran</span> </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="<?= base_url(''); ?>/pemasukan"
                            class="nav-link px-2 text-truncate text-dark d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-bank" viewBox="0 0 16 16">
                                <path
                                    d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z" />
                            </svg>
                            <span class="d-none d-sm-inline ps-3">Pemasukan</span> </a>
                    </li>
                    <!-- <li>
                        <a href="#" class="nav-link px-2 text-truncate"><i class="bi bi-people fs-4"></i>
                            <span class="d-none d-sm-inline">Customers</span> </a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="col overflow-auto h-100">
            <div class="border rounded-3 p-3 opaque h-100">
                <?php echo view($main_view); ?>
            </div>
        </div>
    </div>
</main>