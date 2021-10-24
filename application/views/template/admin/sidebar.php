<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow text-white" data-scroll-to-active="true">
  <div class="navbar-header text-center">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto"><a class="navbar-brand nav-url" href="<?= site_url('dashboard'); ?>">
          <center>
            <h2 class="brand-text mb-0 text-white text-center">SISTAFF</h2>
          </center>
        </a></li>
      <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <br>
  <div class="main-menu-content">
    <ul class="navigation navigation-main text-white" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="nav-item ">
        <a class="text-white" href="<?= site_url('dashboard'); ?>"><i class="fa fa-home fa-fw"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="text-white" href="<?= site_url('statistics'); ?>"><i class="fa fa-bar-chart"></i>
          <span class="menu-title">Statistics</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="text-white" href="<?= site_url('staff'); ?>"><i class="feather icon-user"></i>
          <span class="menu-title">Staff</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="text-white" href="<?= site_url('report'); ?>"><i class="fa fa-envelope"></i>
          <span class="menu-title">Laporan</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="text-white" href="<?= site_url('laporan'); ?>"><i class="fa fa-cog"></i>
          <span class="menu-title">Setting</span>
        </a>
      </li>
    </ul>
  </div>
</div>