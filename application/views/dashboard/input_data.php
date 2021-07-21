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
		                <li>
		                    <a href="<?= base_url('Salesman/tablesData'); ?>">
		                        <i class="fa fa-table"></i>

		                        <p>Tabel Data</p>
		                    </a>
		                </li>
		                <li class="active">
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
		                    <a class="navbar-brand" href="#">Input Data</a>
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
		                <h2 class="title">Form Input Data Pembelian</h2>
		                <p class="category">
		                    Form ini digunakan untuk menginputkan data pembelian.
		                </p>
		            </div>
		        </div>
		        <div class="content">
		            <div class="row">
		                <div class="col-md-12">
		                    <div class="card">
		                        <div class="card-body">
		                            <?= $this->session->flashdata('flash'); ?>
		                            <form method="POST" action="">
		                                <div class="row">
		                                    <div class="col-md-11 pr-2 ml-5">
		                                        <div class="form-group">
		                                            <label>Customer</label>
		                                            <input type="text" class="form-control" id="customer" name="customer" placeholder="Isi nama lengkap pembeli." />
		                                            <?= form_error('customer', '<small class="text-required pl-3">', '</small>'); ?>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-11 pr-2 ml-5">
		                                        <div class="form-group">
		                                            <label>Mobil</label>
		                                            <input type="text" class="form-control" id="car" name="car" placeholder="Isi nama mobil yang dibeli." />
		                                            <?= form_error('car', '<small class="text-required pl-3">', '</small>'); ?>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-11 pr-2 ml-5">
		                                        <div class="form-group">
		                                            <label>Tanggal Pembelian</label>
		                                            <input type="date" class="form-control" id="date" name="date" placeholder="Isi dengan tanggal pembelian mobil." />
		                                            <?= form_error('date', '<small class="text-required pl-3">', '</small>'); ?>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-11 pr-2 ml-5">
		                                        <div class="form-group">
		                                            <label>Jumlah Bayar (in $ Currency)</label>
		                                            <input type="text" class="form-control" id="total" name="total" placeholder="Isi dengan diawali jumlah yang telah dibayarkan." />
		                                            <?= form_error('total', '<small class="text-required pl-3">', '</small>'); ?>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-11 pr-2 ml-5">
		                                        <div class="form-group">
		                                            <label>Status Pembayaran</label>
		                                            <input type="text" class="form-control" id="status" name="status" placeholder="Isi dengan status Lunas / Belum Lunas." />
		                                            <?= form_error('status', '<small class="text-required pl-3">', '</small>'); ?>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-11 pr-2 ml-5">
		                                        <div class="form-group">
		                                            <a href=""><button type="submit" name="submit" class="btn btn-dark btn-lg btn-block" id="submit">
		                                                    Submit
		                                                </button>
		                                            </a>
		                                        </div>
		                                    </div>
		                                </div>
		                            </form>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>