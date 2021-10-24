<div class="content-header row">
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row">
            <div class="col-sm-7 p-2">
                <h2>Laporan</h2>
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
            <div class="card-header w-100 text-center" style="width:100%">
            </div>
            <div class="card-content">
                <div class="card-body">
                    <center>
                        <a href="#"><img src="<?php echo base_url('asset/btn_export.png'); ?>" style="width:30%"></a>
                    </center>
                    <div class="table-responsive">
                        <table class="table table-hover-animation mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">File Name</th>
                                    <th scope="col">Last Update</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 1; $i < 30; $i++) { ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><i class="feather icon-file"></td>
                                        <td>Laporan Maret <?= $i ?>.doc</td>
                                        <td>Update <?= $i ?> days ago</td>
                                        <td>
                                            <a href="#" class="btn btn-secondary btn-sm">Download</a>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
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