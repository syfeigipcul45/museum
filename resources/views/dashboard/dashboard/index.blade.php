@extends('dashboard.layouts.app')

@section('title')
Dashboard
@endsection

@section('extra-css')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<style>
    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 320px;
        max-width: 800px;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }

    input[type="number"] {
        min-width: 50px;
    }
</style>
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Berita</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $berita }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Agenda</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $agenda }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <!-- <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                           Produk</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Earnings (Monthly) Card Example -->
    <!-- <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengajar
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Grafik Jumlah Koleksi</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <figure class="highcharts-figure">
                    <div id="jumlah_koleksi"></div>
                </figure>
                <!-- <div class="chart-area">
                    <canvas id="jumlah_koleksi" width="100%"></canvas>
                </div> -->
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Persentase Jumlah Koleksi</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <figure class="highcharts-figure">
                    <div id="persentase"></div>
                </figure>
            </div>
        </div>
    </div>

</div>

<!-- Content Row -->

@endsection

@section('extra-js')
<!-- Page level plugins -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        <?php
        function randomHex()
        {
            $chars = 'ABCDEF0123456789';
            $color = '#';
            for ($i = 0; $i < 6; $i++) {
                $color .= $chars[rand(0, strlen($chars) - 1)];
            }
            return $color;
        }


        ?>

        // var ctx = document.getElementById("jumlah_koleksi");
        // var barchart2 = new Chart(ctx, {
        //     type: 'bar',
        //     data: {
        //         labels: [<?php foreach ($kategori as $item)
                                //                         echo "'" . $item->name . "'" . "," 
                            ?>],
        //         datasets: [{
        //             label: 'Jumlah Data',
        //             fill: true,
        //             data: [<?php foreach ($kategori as $item)
                                //                         echo getBendaKoleksi($item->id) . "," 
                                ?>],
        //             borderWidth: 1,
        //             backgroundColor: '#FF718F',
        //             borderColor: '#FF718F',
        //         }]
        //     },
        //     options: {
        //         responsive: true,
        //         legend: {
        //             position: 'top',
        //         },
        //         title: {
        //             display: true,
        //             text: 'Grafik Jumlah Koleksi'
        //         },
        //         scales: {
        //             xAxes: [{
        //                 display: true,
        //                 scaleLabel: {
        //                     display: true,
        //                     labelString: 'Jenis Koleksi'
        //                 }
        //             }],
        //             yAxes: [{
        //                 id: 'left-y-axis',
        //                 type: 'linear',
        //                 position: 'left',
        //                 display: true,
        //                 scaleLabel: {
        //                     display: true,
        //                     labelString: 'Benda Koleksi'
        //                 }
        //             }]
        //         }
        //     }
        // });

        // var xValues = [<?php foreach ($kategori as $item)
                            //                     echo "'" . $item->name . "'" . "," 
                            ?>];
        // var yValues = [<?php foreach ($kategori as $item)
                            //                     echo getPersentase($item->id) . "," 
                            ?>];
        // var barColors = [
        //     <?php foreach ($kategori as $item)
                //         echo "'" . randomHex() . "'" . "," 
                ?>
        // ];

        // new Chart("persentase", {
        //     type: "pie",
        //     data: {
        //         labels: xValues,
        //         datasets: [{
        //             backgroundColor: barColors,
        //             data: yValues
        //         }]
        //     },
        //     options: {
        //         title: {
        //             display: true,
        //             text: "Persentase Jumlah Koleksi"
        //         }
        //     }
        // });

        Highcharts.setOptions({
            colors: [<?php foreach ($kategori as $item)
                        echo "'" . randomHex() . "'" . "," 
                ?>]
        });

        Highcharts.chart('jumlah_koleksi', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Koleksi'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Berjumlah: <b>{point.y:.1f} buah</b>'
            },
            series: [{
                name: 'Jenis Koleksi',
                data: [
                    <?php foreach ($kategori as $item) {
                    echo "[" . "'" . $item->name . "'," . getBendaKoleksi($item->id) . "],";
                } ?>
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#ffffff',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif',
                    }
                }
            }]
        });

        Highcharts.chart('persentase', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [<?php foreach ($kategori as $item) {
                            echo "{ name:" . "'" . $item->name . "'" . ", y:" . getPersentase($item->id) . "},";
                        } ?>]
            }]
        });
    });
</script>
@endsection