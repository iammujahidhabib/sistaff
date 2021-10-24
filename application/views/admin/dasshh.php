<?php $this->load->view('admin/style'); ?>
        <?php $this->load->view('template/admin/nav 2'); ?>
<div class="content-header row">
  <div class="content-header-left col-md-12 col-12 mb-2">
    <!-- <div class="row">
      <div class="col-sm-7 p-2" style="background-color: white;border-radius:10px;">
        <div style="background-image: url(<?php echo base_url('asset/zzzzz.png'); ?>);background-position: right;background-repeat:no-repeat;">
          <h2>Hello, <?= $this->session->userdata('name') ?>!</h2>
          <h5>It’s good to see you again.</h5>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="row">
          <div class="col-sm-9">
            <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>aset/search/">
              <input type="text" class="form-control" id="searchbar" placeholder="Search" name="search">
            </form>
          </div>
          <div class="col-sm-1">
            <a class="nav-link nav-link-label" href="javascript:void(0);" data-toggle="dropdown">
              <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-body feather feather-bell">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
              </svg>
            </a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
              <li class="dropdown-menu-header">
                <div class="dropdown-header m-0 p-2">
                  <h3 class="white">1 Terbaru</h3><span class="notification-title">App Notifications</span>
                </div>
              </li>
              <li class="scrollable-container media-list">
                <a class="d-flex justify-content-between" href="javascript:void(0)">
                  <div class="media d-flex align-items-start">
                    <div class="media-left"><i class="feather icon-plus-square primary"></i></div>
                    <div class="media-body">
                      <h6 class="primary media-heading">Maintenace</h6><small class="notification-text"> Samsung Smart TV Selesai!</small>
                    </div><small>
                      <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">1 jam yang lalu</time></small>
                  </div>
                </a>
              </li>
              <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
            </ul>
          </div>
          <div class="col-sm-1">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
              <div class="user-nav d-sm-flex d-none">
                <span class="user-name text-bold-600"><?= $this->session->nama; ?></span>
              </div>
              <span>
                <div class="round img-profile shadow" style="background: url('<?= base_url() ?>asset/images/default.png'); height:20px; width:20px; "></div>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
             <a class="dropdown-item" href="<?= site_url('profile/edit'); ?>"><i class="feather icon-user"></i> Edit Profile</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class="feather icon-mail"></i> My Inbox</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class="feather icon-check-square"></i> Task</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class="feather icon-message-square"></i> Chats</a> 
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url('login/logout/'); ?>"><i class="feather icon-power"></i> Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
      <div class="form-group breadcrum-right">
        <!-- <button type="button" class="btn btn-outline-primary block btn-lg waves-effect waves-light" data-toggle="modal" data-target="#default">
                  Tambah Kategori
                </button> -->
        <!-- <a href="" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button">Tambah Aset</a> -->
      </div>
    </div>
  </div>
  <div class="content-area__content col-sm-12">
    <div class="row">
      <div class="col-sm-8 row">
        <div class="col-xl-4 col-md-4 col-sm-4">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body">
                <!-- <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                  <div class="avatar-content">
                    <i class="fa fa-archive text-info font-medium-5"></i>
                  </div>
                </div> -->
                <h2 class="text-bold-700"><?= $jumlah_aset ?></h2>
                <p class="mb-0 line-ellipsis">Total Staff</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-4">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body">
                <!-- <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                  <div class="avatar-content">
                    <i class="fa fa-smile-o text-success font-medium-5"></i>
                  </div>
                </div> -->
                <h2 class="text-bold-700"><?= $aset_bagus ?></h2>
                <p class="mb-0 line-ellipsis">Laporan Absensi</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-4">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body">
                <!-- <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                  <div class="avatar-content">
                    <i class="fa fa-frown-o text-danger font-medium-5"></i>
                  </div>
                </div> -->
                <h2 class="text-bold-700"><?= $aset_rusak ?></h2>
                <p class="mb-0 line-ellipsis">Record Healthy</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-md-12 col-sm-12">
          <h3>Your Statistics</h3>
          <div id="chart" class="card">
            <canvas id="myChartNilai" style="height:400px"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

        <div class="month">
          <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <li>
              August<br>
              <span style="font-size:18px">2021</span>
            </li>
          </ul>
        </div>

        <ul class="weekdays">
          <li>Mo</li>
          <li>Tu</li>
          <li>We</li>
          <li>Th</li>
          <li>Fr</li>
          <li>Sa</li>
          <li>Su</li>
        </ul>

        <ul class="days">
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li><span class="active">10</span></li>
          <li>11</li>
          <li>12</li>
          <li>13</li>
          <li>14</li>
          <li>15</li>
          <li>16</li>
          <li>17</li>
          <li>18</li>
          <li>19</li>
          <li>20</li>
          <li>21</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li>25</li>
          <li>26</li>
          <li>27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>31</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
  var cnilai = document.getElementById('myChartNilai').getContext('2d');
  var myChartNilai = new Chart(cnilai, {
    type: 'line',
    data: {
      labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      datasets: [{
        label: '',
        data: [3, 7, 6, 8, 9, 10, 2],
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