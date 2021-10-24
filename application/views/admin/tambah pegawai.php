<div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Pegawai</h2>
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
                    <h4 class="card-title">Tambah Pegawai</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                                <div class="row">
                                <div class="col-md-6 col-12">
                        <form class="form form-vertical" action="<?=site_url('user/save_pegawai/')?>" method="post">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nama Pegawai</label>
                                            <input type="text" id="first-name-vertical" class="form-control" name="pegawai" placeholder="Nama Pegawai">
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Tanggal Lahir</label>
                                            <input type="date" id="first-name-vertical" class="form-control" name="tanggal" placeholder="Tanggal Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Jabatan</label>
                                            <input type="text" id="first-name-vertical" class="form-control" name="jabatan" placeholder="Jabatan">
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Departemen</label>
                                            <select class="form-control" name="departemen">
                                            <?php foreach ($departemen as $key) {?>
                                                <option value="<?=$key->id_departemen?>"><?=$key->departemen?></option>
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Email</label>
                                            <input type="Email" id="first-name-vertical" class="form-control" name="Email" placeholder="Email@email.com juga berfungsi sebagai Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Password</label>
                                            <input type="Password" id="first-name-vertical" class="form-control" name="password" placeholder="******">
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-vertical">No HP</label>
                                            <input type="text" id="first-name-vertical" class="form-control" name="nohp" placeholder="0821929XXXX">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
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