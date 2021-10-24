<div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Aset</h2>
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
                    <h4 class="card-title">Detail Aset</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="<?=base_url('aset/save_aset/')?>">
                            <div class="form-body">
                                <div class="row">
                                <?php foreach ($aset as $key) { ?>
                                    <div class="col">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                Nama Aset
                                            </div>
                                            <div class="col-md-4">
                                                <?=$key->nama_aset;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <div class="col-md-4">Serial Number Aset</div>
                                            <div class="col-md-4"><?=$key->serial_number;?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <div class="col-md-4">Tanggal Masuk</div>
                                            <div class="col-md-4">
                                            <?=$key->tanggal_masuk;?></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group row">
                                            <div class="col-md-4">Kategori</div>
                                            <div class="col-md-4">
                                            <?=$key->kategori?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group row">
                                            <div class="col-md-4">Nilai (Rp)</div>
                                            <div class="col-md-4">
                                            <?=$key->nilai?></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group row">
                                            <div class="col-md-4">Departemen</div>
                                            <div class="col-md-4">
                                            <?=$key->departemen?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group row">
                                            <div class="col-md-4">Lokasi</div>
                                            <div class="col-md-4">
                                            <?=$key->lokasi?></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group row">
                                            <div class="col-md-4">Penanggung Jawab</div>
                                            <div class="col-md-4">
                                            <?=$key->nama?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group row">
                                            <div class="col-md-4">Kondisi Aset</div>
                                            <div class="col-md-4">
                                            <?=$key->kondisi;?></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group row">
                                            <div class="col-md-4">Periode Maintenance</div>
                                            <div class="col-md-4">
<?php 
                                                if ($key->jenis == 'fixed') {
    switch ($key->maintenance) {
            case 7:
                echo "1 Minggu";
                break;
            case 14:
                echo "2 Minggu";
                break;
            case 30:
                echo "1 Bulan";
                break;
            case 90:
                echo "3 Bulan";
                break;
            case 180:
                echo "6 Bulan";
                break;
            case 365:
                echo "1 Tahun";
                break;
    }
}else{
    echo "5 Tahun";
}

?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group row">
                                            <div class="col-md-4">Depresiasi</div>
                                            <div class="col-md-4">
                                            <?php 
                                                if ($key->jenis == 'license') {
                                                    echo "100% / 5tahun";   
                                                }else{
                                                    echo $key->depresiasi."% / tahun";
                                                }?>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group row">
                                            <div class="col-md-4">Jumlah</div>
                                            <div class="col-md-4">
                                            <?=$key->jumlah;?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group row">
                                            <div class="col-md-4">Dokumen Aset (pdf/img)</div>
                                            <div class="col-md-4">
                                            <a style="color: white" class="btn bg-info btn-sm btn-round" href="<?=base_url('dokumen/')?><?=$key->dokumen;?>">Lihat Dokumen
                                            </a></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group row">
                                            <div class="col-md-4">Deskripsi/Keterangan</div>
                                            <div class="col-md-4">
                                            <?=$key->keterangan;?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <label>QRCode</label><br>
                                    <img src="<?=base_url()?>qrcode/<?=$key->file_qr;?>">
                                    </div>
                                <?php }?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                Table Depresiasi
                                <div class="table-responsive">
                                    <table class="table table-hover-animation mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggal<br>Depresiasi</th>
                                                <th scope="col">Nilai<br>Sebelum</th>
                                                <th scope="col">Nilai<br>Sesudah</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                    <?php $no=1;foreach ($depresiasi_log as $key) { ?>
                                            <tr>
                                              <th scope="row"><?=$no?></th>
                                              <td><?=$key->tanggal_depresiasi;?></td>
                                              <td>Rp <?=$key->nilai_sebelum;?></td>
                                              <td>Rp <?=$key->nilai_sesudah;?></td>
                                            </tr>
                                    <?php  $no++;} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col">
                                Table Maintenance
                                <div class="table-responsive">
                                    <table class="table table-hover-animation mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggal<br>Maintenance</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Keterangan</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                    <?php $no=1;foreach ($maintenance_log as $key) { ?>
                                            <tr>
                                              <th scope="row"><?=$no?></th>
                                              <td><?=$key->tanggal_maintenance;?></td>
                                              <td><?php
                                              if ($key->status == 1) {
                                                  echo "<span class='badge badge-danger'>Belum dimaintenance</span>";
                                              }else{
                                                echo "<span class='badge badge-success'>Sudah dimaintenance</span>";
                                              }?></td>
                                              <td><?=$key->keterangan_m;?></td>
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
        </div>
    </div>
</section>


