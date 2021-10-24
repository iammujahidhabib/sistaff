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
          <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
              <!-- <button type="button" class="btn btn-outline-primary block btn-lg waves-effect waves-light" data-toggle="modal" data-target="#default">
                  Tambah Kategori
                </button> -->
                <a href="<?= site_url('dashboard/tambah_lokasi/'); ?>" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button">Tambah Lokasi</a>
            </div>
          </div>
        </div>

        <div class="row" id="table-hover-animation">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tabel Lokasi</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover-animation mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                        <?php $no=1;foreach ($lokasi as $key) { ?>
                                <tr>
                                  <th scope="row"><?=$no?></th>
                                  <td><?=$key->lokasi;?></td>
                                  <td><?=$key->date;?></td>
                                  <td><a class="btn btn-danger btn-sm" style="color: white" onclick="confirm_delete(<?=$key->id_lokasi;?>)"><i class="fa fa-trash-o"></i> Hapus</a></td>
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
<script type="text/javascript">
  function confirm_delete(id) {
    var url="<?=base_url();?>";
    var con=confirm('Yakin?');
    if (con == true) {
        window.location = url+"dashboard/delete_lokasi/"+id;
        console.log('Yakin');
    }else{
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