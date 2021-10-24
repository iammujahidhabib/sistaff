<div class="content-header row">
  <div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row">
      <div class="col-sm-7 p-2">
        <h2>Statistik Kesehatan Staff</h2>
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
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url('login/logout/'); ?>"><i class="feather icon-power"></i> Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" id="table-hover-animation">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Tabel Staff</h2>
                <div class="breadcrumb-wrapper col-12">
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
              <a href="<?= site_url('dashboard/tambah_user/'); ?>" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button">Tambah User</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-content">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover-animation mb-0">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($akun as $key) { ?>
                  <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $key->username; ?></td>
                    <td><?= $key->email; ?></td>
                    <td><?php
                        if ($key->id_role == 1) {
                          echo "super admin";
                        } elseif ($key->id_role == 2) {
                          echo "admin";
                        } elseif ($key->id_role == 3) {
                          echo "pegawai";
                        }
                        ?></td>
                    <td><?= $key->date; ?></td>
                    <td>
                      <?php if ($key->status == 1) {
                        echo "<span class='badge badge-success'>aktif</span>";
                      } else {
                        echo "<span class='badge badge-danger'>disabled</span>";
                      } ?>
                    </td>
                    <td>
                      <?php if ($key->id_role != 1) { ?>
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-light btn-sm dropdown-toggle dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Ubah Role<span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(79px, 38px, 0px);">
                            <a class="dropdown-item" onclick="ubah_role(<?= $key->id_akun ?>,2);">Admin</a>
                            <a class="dropdown-item" onclick="ubah_role(<?= $key->id_akun ?>,3);">Pegawai</a>
                          </div>
                        </div>
                      <?php } ?>
                      <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
                    </td>
                  </tr>
                <?php $no++;
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".table").dataTable();
    });
</script>
<script type="text/javascript">
  function ubah_role(id, status) {
    var url = "<?= base_url(); ?>";
    var con = confirm('Yakin?');
    if (con == true) {
      window.location = url + "user/ubah_role/" + id + "/" + status;
      console.log('Yakin');
    } else {
      console.log('Tidak');
    }
  }
</script>
<!-- <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: block; padding-right: 15px;" aria-modal="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5>Check First Paragraph</h5>
                        <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                          Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                          cheesecake cookie chocolate cake liquorice.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Accept</button>
                      </div>
                    </div>
                  </div>
                </div> -->