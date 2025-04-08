<?php
$title_page = 'Home';
//Menus Sidebar
$page = 'home';
$separador = 'dashboard';
require_once('includes/load.php');
if (!$session->isUserLoggedIn(true)) {
    redirect('index.php', false);
}


include_once('layouts/head.php');

?>



<body>
    <div class="wrapper">
        <?php include_once('layouts/sidebar.php'); ?>
        <div class="main">
            <?php include_once('layouts/navbar.php'); ?>
            <!-- Contenedor main -->
            <main class="content">

                <div class="container-fluid p-0">
                    <?php echo display_msg($msg); ?>
                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3><strong>Resumen -</strong> Dashboard</h3>
                        </div>

                        <div class="col-auto ms-auto text-end mt-n1">
                            <!--<a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a> -->
                            <a href="#" class="btn btn-primary">Nuevo Embarque</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Ingresos</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="dollar-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">$47.482</h1>
                                    <div class="mb-0">
                                        <span class="badge badge-success-light">3.65%</span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Orders</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="shopping-bag"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">2.542</h1>
                                    <div class="mb-0">
                                        <span class="badge badge-danger-light">-5.25%</span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Activity</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="activity"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">16.300</h1>
                                    <div class="mb-0">
                                        <span class="badge badge-success-light">4.65%</span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Revenue</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">$20.120</h1>
                                    <div class="mb-0">
                                        <span class="badge badge-success-light">2.35%</span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-12 d-flex">
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                    <div class="float-end">
                                        <form class="row g-2">
                                            <div class="col-auto">
                                                <select class="form-select form-select-sm bg-light border-0">
                                                    <option>Jan</option>
                                                    <option value="1">Feb</option>
                                                    <option value="2">Mar</option>
                                                    <option value="3">Apr</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;" placeholder="Search..">
                                            </div>
                                        </form>
                                    </div>
                                    <h5 class="card-title mb-0">Total Revenue</h5>
                                </div>
                                <div class="card-body pt-2 pb-3">
                                    <div class="chart chart-md">
                                        <canvas id="chartjs-dashboard-line"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </main>

            <!-- Fin Contenedor main -->
            <?php include_once('layouts/footer.php'); ?>

        </div>
    </div>

    <?php include_once('layouts/scripts.php'); ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
            var gradientLight = ctx.createLinearGradient(0, 0, 0, 225);
            gradientLight.addColorStop(0, "rgba(215, 227, 244, 1)");
            gradientLight.addColorStop(1, "rgba(215, 227, 244, 0)");
            var gradientDark = ctx.createLinearGradient(0, 0, 0, 225);
            gradientDark.addColorStop(0, "rgba(51, 66, 84, 1)");
            gradientDark.addColorStop(1, "rgba(51, 66, 84, 0)");
            // Line chart
            new Chart(document.getElementById("chartjs-dashboard-line"), {
                type: "line",
                data: {
                    labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Ventas ($)",
                        fill: false,
                        backgroundColor: window.theme.id === "light" ? gradientLight : gradientDark,
                        borderColor: window.theme.primary,
                        data: [
                            211,
                            156,
                            158,
                            189,
                            158,
                            192,
                            256,
                            244,
                            280,
                            348,
                            291,
                            337
                        ]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 50
                            },
                            display: true,
                            borderDash: [3, 3],
                            gridLines: {
                                color: "rgba(0,0,0,0.0)",
                                fontColor: "#fff"
                            }
                        }]
                    }
                }
            });
        });
    </script>

</body>

</html>