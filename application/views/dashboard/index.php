		<div class="wrapper">
		    <div class="sidebar" data-color="orange">
		        <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
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
		                <li class="active">
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
		                    <a class="navbar-brand" href="#">Dashboard</a>
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
		        <div class="panel-header panel-header-lg">
		            <canvas id="bigDashboardChart"></canvas>
		        </div>
		        <div class="content">
		            <div class="row">
		                <div class="col-lg-4">
		                    <div class="card card-chart">
		                        <div class="card-header">
		                            <h5 class="card-category">Global Sales</h5>
		                            <h4 class="card-title">Shipped Cars Worldwide</h4>
		                            <div class="dropdown">
		                                <button type="button" class="
												btn btn-round btn-outline-default
												dropdown-toggle
												btn-simple btn-icon
												no-caret
											" data-toggle="dropdown">
		                                    <i class="fa fa-cog"></i>
		                                </button>
		                                <div class="dropdown-menu dropdown-menu-right">
		                                    <a class="dropdown-item" href="#">Action</a>
		                                    <a class="dropdown-item" href="#">Another action</a>
		                                    <a class="dropdown-item" href="#">Something else here</a>
		                                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="card-body">
		                            <div class="chart-area">
		                                <canvas id="lineChartExample"></canvas>
		                            </div>
		                        </div>
		                        <div class="card-footer">
		                            <div class="stats">
		                                <i class="fa fa-retweet"></i>
		                                Just Updated
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-4 col-md-6">
		                    <div class="card card-chart">
		                        <div class="card-header">
		                            <h5 class="card-category">2021 Sales</h5>
		                            <h4 class="card-title">All Cars</h4>
		                            <div class="dropdown">
		                                <button type="button" class="
												btn btn-round btn-outline-default
												dropdown-toggle
												btn-simple btn-icon
												no-caret
											" data-toggle="dropdown">
		                                    <i class="fa fa-cog"></i>
		                                </button>
		                                <div class="dropdown-menu dropdown-menu-right">
		                                    <a class="dropdown-item" href="#">Action</a>
		                                    <a class="dropdown-item" href="#">Another action</a>
		                                    <a class="dropdown-item" href="#">Something else here</a>
		                                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="card-body">
		                            <div class="chart-area">
		                                <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
		                            </div>
		                        </div>
		                        <div class="card-footer">
		                            <div class="stats">
		                                <i class="fa fa-retweet"></i>
		                                Just Updated
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-4 col-md-6">
		                    <div class="card card-chart">
		                        <div class="card-header">
		                            <h5 class="card-category">Email Statistics</h5>
		                            <h4 class="card-title">24 Hours Performance</h4>
		                        </div>
		                        <div class="card-body">
		                            <div class="chart-area">
		                                <canvas id="barChartSimpleGradientsNumbers"></canvas>
		                            </div>
		                        </div>
		                        <div class="card-footer">
		                            <div class="stats">
		                                <i class="fa fa-calendar"></i> Last
		                                7 days
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>