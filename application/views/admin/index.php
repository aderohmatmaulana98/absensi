<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                        <h5 class="text-white op-7 mb-2">Selamat Datang, <?= $users['nama_lengkap'] ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-md-6">
                    <div class="card full-height">
                        <div class="row d-flex justify-content-center p-3">
                            <div class="col-lg-4">
                                <div class="card rounded-pill">
                                    <div class="card-body shadow text-center px-2">
                                        <p class="font-weight-bold">Jumlah Pegawai Aktif</p>
                                        <hr width="100%" style="font-size: 50px;" color="blue">
                                        <h1 class="font-weight-bold"><strong>10000</strong></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card rounded-pill">
                                    <div class="card-body shadow text-center px-2">
                                        <p class="font-weight-bold">Jumlah Pegawai Cuti</p>
                                        <hr width="100%" style="font-size: 50px;" color="blue">
                                        <h1 class="font-weight-bold"><strong>50</strong></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card rounded-pill">
                                    <div class="card-body shadow text-center px-2">
                                        <p class="font-weight-bold">Jumlah Pegawai Dinas Luar</p>
                                        <hr width="100%" style="font-size: 50px;" color="blue">
                                        <h1 class="font-weight-bold"><strong>50</strong></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card rounded-pill">
                                    <div class="card-body shadow text-center px-2">
                                        <p class="font-weight-bold">Jumlah Pegawai Sakit</p>
                                        <hr width="100%" style="font-size: 50px;" color="blue">
                                        <h1 class="font-weight-bold"><strong>50</strong></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card rounded-pill">
                                    <div class="card-body shadow text-center px-2">
                                        <p class="font-weight-bold">Jumlah Pegawai Pensiun</p>
                                        <hr width="100%" style="font-size: 50px;" color="blue">
                                        <h1 class="font-weight-bold"><strong>50</strong></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card full-height">
                        <div class="card-body">
                            <div class="card-title">Total income & spend statistics</div>
                            <div class="row py-3">
                                <div class="col-md-4 d-flex flex-column justify-content-around">
                                    <div>
                                        <h6 class="fw-bold text-uppercase text-success op-8">Total Income</h6>
                                        <h3 class="fw-bold">$9.782</h3>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold text-uppercase text-danger op-8">Total Spend</h6>
                                        <h3 class="fw-bold">$1,248</h3>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div id="chart-container">
                                        <canvas id="totalIncomeChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.themekita.com">
                            ThemeKita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Help
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright ml-auto">
                2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
            </div>
        </div>
    </footer>
</div>