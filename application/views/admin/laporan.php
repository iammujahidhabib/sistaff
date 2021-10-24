<div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Report</h2>
                <div class="breadcrumb-wrapper col-12">
                  <!--<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Home</a>
                    </li>
                    <li class="breadcrumb-item active">Table
                    </li>
                  </ol>-->
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
              <!-- <button type="button" class="btn btn-outline-primary block btn-lg waves-effect waves-light" data-toggle="modal" data-target="#default">
                  Tambah Kategori
                </button> --><!-- 
                <a href="<?= site_url('user/tambah_pegawai/'); ?>" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button">Tambah Pegawai</a> -->
            </div>
          </div>
        </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h4>Maintenance Bulan <?=date("F")?></h4>
                            </div>
                            <div class="card-content">
                                <canvas id="myChart" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Kondisi Aset Bulan <?=date("F")?></h4>
                                </div>
                                <div class="card-content">
                                    <canvas id="myChartCondition" height="300"></canvas>
                                </div>
                            </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="col">
                        <div class="card">
                                <div class="card-header">
                        <h4>Nilai Aset Tahun <?=date("Y")?></h4>
                        </div>
                        <div class="card-content">
                        <canvas id="myChartNilai" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
        datasets: [{
            label: 'Maintenance Bulan <?=date("F")?> ',
            data: [7, 6, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var kondisi = document.getElementById('myChartCondition').getContext('2d');
var myChartCondition = new Chart(kondisi, {
    type: 'pie',
    data: {
        labels: ['Bagus', 'Rusak'],
        datasets: [{
            label: 'Maintenance Bulan <?=date("F")?> ',
            data: [77, 6],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var cnilai = document.getElementById('myChartNilai').getContext('2d');
var myChartNilai = new Chart(cnilai, {
    type: 'line',
    data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            label: 'Nilai dalam T',
            data: [7, 6.9, 6.3, 6.3, 6.2, 6.2,6.2,6.1,6],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>