<div class="content-header row">
  <div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row">
      <div class="col-sm-7 p-2" style="background-color: white;border-radius:10px;">
        <div style="background-image: url(<?php echo base_url('asset/zzzzz.png'); ?>);background-position: right;background-repeat:no-repeat;">
          <h2>Hello, Superadmin<?= $this->session->userdata('name') ?>!</h2>
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
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url('login/logout/'); ?>"><i class="feather icon-power"></i> Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>