		<div class="wrapper">
		    <div class="sidebar" data-color="orange">
		        <div class="logo">
		            <a href="<?= base_url('landing'); ?>" class="simple-text logo-mini">
		                <img src="<?= base_url(); ?>assets/dashboard/img/astor-logo-light.svg" alt="" />
		            </a>

		            <a href="<?= base_url('landing'); ?>" class="simple-text logo-normal">
		                Astor Dealership
		            </a>
		        </div>

		        <div class="sidebar-wrapper" id="sidebar-wrapper">
		            <ul class="nav">
		                <li>
		                    <a href="<?= base_url('Salesman/index'); ?>">
		                        <i class="fa fa-cube"></i>

		                        <p>Dashboard</p>
		                    </a>
		                </li>
		                <li class="active">
		                    <a href="<?= base_url('Salesman/tablesData'); ?>">
		                        <i class="fa fa-table"></i>

		                        <p>Tabel Data</p>
		                    </a>
		                </li>
		                <li>
		                    <a href="<?= base_url('Salesman/InputData'); ?>">
		                        <i class="fa fa-table"></i>

		                        <p>Input Data</p>
		                    </a>
		                </li>
		            </ul>
		        </div>
		    </div>
		    <div class="main-panel" id="main-panel">
		        <!-- Navbar -->
		        <nav class="
						navbar navbar-expand-lg navbar-transparent
						bg-primary
						navbar-absolute
					">
		            <div class="container-fluid">
		                <div class="navbar-wrapper">
		                    <div class="navbar-toggle">
		                        <button type="button" class="navbar-toggler">
		                            <span class="navbar-toggler-bar bar1"></span>
		                            <span class="navbar-toggler-bar bar2"></span>
		                            <span class="navbar-toggler-bar bar3"></span>
		                        </button>
		                    </div>
		                    <a class="navbar-brand" href="#">Tabel Data</a>
		                </div>
		                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
		                    <span class="navbar-toggler-bar navbar-kebab"></span>
		                    <span class="navbar-toggler-bar navbar-kebab"></span>
		                    <span class="navbar-toggler-bar navbar-kebab"></span>
		                </button>
		                <div class="collapse navbar-collapse justify-content-end" id="navigation">
		                    <ul class="navbar-nav">
		                        <li class="nav-item dropdown">
		                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                <i class="fa fa-bell"></i>
		                                <p>
		                                    <span class="d-lg-none d-md-block">Notifications</span>
		                                </p>
		                            </a>
		                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
		                                <a class="dropdown-item" href="#">No new notifications now.</a>
		                            </div>
		                        </li>
		                        <li class="nav-item dropdown">
		                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                <i class="fa fa-user-circle"></i>
		                                <p>
		                                    <span class="d-lg-none d-md-block">Account</span>
		                                </p>
		                            </a>
		                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
		                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Log Out</a>
		                            </div>
		                        </li>
		                    </ul>
		                </div>
		            </div>
		        </nav>
		        <!-- End Navbar -->
		        <div class="panel-header">
		            <div class="header text-center">
		                <h2 class="title">Tabel Data Pembelian</h2>
		                <p class="category">
		                    Tabel ini digunakan untuk menampilkan data pembelian yang
		                    telah diinput.
		                </p>
		            </div>
		        </div>
		        <div class="content">
		            <div class="row">
		                <div class="col-md-12">
		                    <div class="card">
		                        <div class="card-header">
		                            <h4 class="card-title">Data Pembelian</h4>
		                            <?= $this->session->flashdata('notification'); ?>
		                        </div>
		                        <div class="card-body">
		                            <div class="table-responsive">
		                                <table class="table">
		                                    <thead class="text-primary">
		                                        <th>ID</th>
		                                        <th>Customer</th>
		                                        <th>Mobil</th>
		                                        <th>Tanggal Pembelian</th>
		                                        <th>Jumlah Bayar</th>
		                                        <th>Status Pembayaran</th>
		                                        <th>Action</th>
		                                    </thead>
		                                    <tbody>
		                                        <?php $i = 1; ?>
		                                        <?php foreach ($tabelpembelian as $tp) : ?>
		                                            <tr>
		                                                <td><?= $i; ?></td>
		                                                <td><?= $tp['customer'] ?></td>
		                                                <td><?= $tp['car'] ?></td>
		                                                <td><?= $tp['date'] ?></td>
		                                                <td>$ <?= $tp['total'] ?></td>
		                                                <td><?= $tp['status'] ?></td>
		                                                <td class="text-center">
		                                                    <a href="<?= base_url('') ?>Salesman/deleteData/<?= $tp['id']; ?>"><i class="fa fa-trash text-danger text-center pr-3"></i></a>
		                                                    <a href="<?= base_url('') ?>Salesman/editData/<?= $tp['id']; ?>"><i class="fa fa-edit text-primary text-center"></i></a>
		                                                </td>
		                                            </tr>
		                                            <?php $i++; ?>
		                                        <?php endforeach; ?>
		                                    </tbody>
		                                </table>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>