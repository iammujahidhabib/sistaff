<div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Asset</h2>
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
            <?php if ($this->session->role != 3) { ?>
                <a href="<?= site_url('aset/tambah_aset/'); ?>" class="btn-icon btn btn-primary btn-round waves-effect waves-light" type="button">Tambah Asset</a>
            <?php }?>
            </div>
          </div>
        </div>

        <div class="row" id="table-hover-animation">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Warranty</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                  <div class="btn-group btn-sm" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-primary waves-effect waves-light">PDF</button>
                  <button type="button" class="btn btn-primary waves-effect waves-light">EXCEL</button>
                  <button type="button" class="btn btn-primary waves-effect waves-light">PRINT</button>
                </div>
                <br>
                <div class="table-responsive">
                        <table class="table table-hover-animation mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Asset</th>
                                    <th scope="col">Tanggal Mulai</th>
                                    <th scope="col">Tanggal Selesai</th>
                                    <th scope="col">Provider</th>
                                    <th scope="col">Status Warranty</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Printer LX800</td>
                                  <td>2020-10-07 00:00:00</td>
                                  <td>2022-10-07 00:00:00</td>
                                  <td>Epson</td>
                                  <td>
                                    <span class="badge badge-warning">Sedang Berjalan</span></td>
                                  <td>
                                    <a class="btn btn-secondary btn-sm waves-effect waves-light" href="">Detail</a>
                                    <a class="btn btn-danger btn-sm waves-effect waves-light" style="color: white" ><i class="fa fa-trash-o"> </i>Hapus</a>
                                  </td>
                                </tr>
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
        window.location = url+"dashboard/delete_waranty/"+id;
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
                          <span aria-hidden="true">??</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5>Check First Paragraph</h5>
                        <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy drag??e apple pie.
                          Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                          cheesecake cookie chocolate cake liquorice.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Accept</button>
                      </div>
                    </div>
                  </div>
                </div> -->