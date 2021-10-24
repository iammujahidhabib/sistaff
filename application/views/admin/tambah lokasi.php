<div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Lokasi</h2>
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
          <!-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
                <a href="<?= site_url('dashboard/tambah_kategori/'); ?>" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button">Tambah Kategori</a>
            </div>
          </div> -->
        </div>

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Lokasi</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                                <div class="row">
                                <div class="col-md-6 col-12">
                        <form class="form form-vertical" action="<?=site_url('dashboard/save_lokasi/')?>" method="post">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nama Lokasi</label>
                                            <input type="text" id="first-name-vertical" class="form-control" name="lokasi" placeholder="Nama Lokasi">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
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
        </div>
    </div>
</section>