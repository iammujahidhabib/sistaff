<div class="content-area__content">
  <div class="row">
    <div class="col">
      <div class="card text-center">
        <div class="card-content">
          <div class="card-body">
            <div class="avatar bg-rgba-success p-50 m-0 mb-1">
              <div class="avatar-content">
                <i class="fa fa-smile-o text-success font-medium-5"></i>
              </div>
            </div>
            <h2 class="text-bold-700">30</h2>
            <p class="mb-0 line-ellipsis">Jumlah Aset Bagus</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center">
        <div class="card-content">
          <div class="card-body">
            <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
              <div class="avatar-content">
                <i class="fa fa-frown-o text-danger font-medium-5"></i>
              </div>
            </div>
            <h2 class="text-bold-700">3</h2>
            <p class="mb-0 line-ellipsis">Jumlah Aset Rusak</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Maintenance</h2>
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
              <a href="<?=base_url()?>maintenance/tambah_maintenance" class="btn btn-primary">Tambah Maintenance</a>
                  <?php if ($tittle == 'Maintenance Schedule') {?>
              <div class="btn-group mb-1">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Ubah Data per
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <a class="dropdown-item" href="<?=base_url()?>aset/service_logs/minggu">1 Minggu ini</a>
                    <a class="dropdown-item" href="<?=base_url()?>aset/service_logs/bulan">1 Bulan kedepan</a>
                    <a class="dropdown-item" href="<?=base_url()?>aset/service_logs/tahun">1 Tahun Kedepan</a>
                  </div>
                </div>
              </div>
                 <?php }?>
              <!-- <button type="button" class="btn btn-outline-primary block btn-lg waves-effect waves-light" data-toggle="modal" data-target="#default">
                  Tambah Kategori
                </button> --><!-- 
                <a href="<?= site_url('user/tambah_pegawai/'); ?>" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button">Tambah Pegawai</a> -->
            </div>
          </div>
        </div>

        <div class="row" id="table-hover-animation">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?=$tittle?></h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                  <?php if ($jangka != '') {?>
                  <p>Sampai dengan tanggal <?=date('d F Y',strtotime($jangka))?></p>
                 <?php }?>
                    <div class="table-responsive">
                        <table class="table table-hover-animation mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Aset</th>
                                    <th scope="col">Tanggal Maintenance</th>
                                    <th scope="col">Kondisi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Vendor</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                        <?php $no=1;foreach ($aset as $key) { ?>
                                <tr>
                                  <th scope="row"><?=$no?></th>
                                  <td><a href="<?=base_url()?>aset/detail/<?=$key->id_aset?>"><?=$key->nama_aset;?></a></td>
                                  <td><?=$key->tanggal_maintenance;?></td>
                                  <td><?=$key->kondisi;?></td>
                                  <td>
                                    <?php
                                      if ($key->status == 1) {
                                        echo "<span class='badge badge-danger'>Belum dimaintenance</span>";
                                      }elseif ($key->status == 3) {
                                        echo "<span class='badge badge-warning'>Sedang maintenance</span>";
                                      }
                                      else{
                                        echo "<span class='badge badge-success'>Sudah dimaintenance</span>";
                                      }?>
                                  </td>
                                  <td>Samsung Service Center</td>
                                  <!-- <td>
                                     <?php
                                      if ($key->status == 2) {
                                        echo $key->keterangan_m;
                                      }?>
                                  </td> -->
                                  <td>
                                    <a class="btn btn-info btn-sm" href="<?=base_url()?>maintenance/detail/<?=$key->id_maintenance?>">Detail</a>
                                    <?php
                                      if ($key->status != 2) { ?>
                                    <div class="btn-group dropdown">
                                      <button type="button" class="btn btn-light btn-sm dropdown-toggle dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Ubah Status<span class="sr-only">Toggle Dropdown</span>
                                      </button>
                                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(79px, 38px, 0px);">
                                        <a class="dropdown-item" onclick="ubah_maintenance(<?=$key->id_maintenance?>,2);">Sudah Maintenance</a>
                                      </div>
                                    </div>
                                  <?php }?>
                                  </td>
                                </tr>
                        <?php  $no++;} ?>
                            </tbody>
                        </table>
                        <!-- <input type="hidden" name="val_kete" id="val_kete"/> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  function ubah_maintenance(id,status) {
    var url="<?=base_url();?>";
    var con=confirm('Yakin?');
    if (con == true) {
        var kete = prompt("Keterangan:", "");
        // document.getElementById("val_kete").value = kete;
        // var jason = {"id":id,"status":status,"keterangan":kete};
        // window.location = url+"aset/ubah_maintenance/"+jason;
        $.ajax({
               'url': '<?= base_url(); ?>aset/ubah_maintenance/'+id+"/"+status,
               'type': 'POST',
               'data':{'keterangan':kete},
               'success': function(){
                  alert("Berhasil Terkirim");
                  location.reload();
               }, //up to youu
             });
        console.log('Yakin'+kete);
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