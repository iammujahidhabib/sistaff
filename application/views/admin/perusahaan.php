<div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Perusahaan</h2>
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
                  Tambah Departemen
                </button> -->
                <a href="<?= site_url('perusahaan/tambah_perusahaan/'); ?>" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button">Tambah Perusahaan</a>
            </div>
          </div>
        </div>

        <div class="row" id="table-hover-animation">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tabel Perusahaan</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover-animation mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Perusahaan</th>
                                    <th scope="col">Industri</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No Telpon</th>
                                    <th scope="col">FAX</th>
                                    <th scope="col" style="width: 30%">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                        <?php $no=1;foreach ($perusahaan as $key) { ?>
                                <tr>
                                  <th scope="row"><?=$no?></th>
                                  <td><?=$key->nama_perusahaan;?></td>
                                  <td><?=$key->industri;?></td>
                                  <td><?=$key->email;?></td>
                                  <td><?=$key->no_telpon;?></td>
                                  <td><?=$key->fax;?></td>
                                  <td><?=$key->alamat;?></td>
                                  <td><a class="btn btn-danger btn-sm btn-round" style="color: white" onclick="confirm_delete(<?=$key->id_perusahaan;?>)"><i class="fa fa-trash-o"></i> Hapus</a></td>
                                </tr>
                        <?php  $no++;} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>